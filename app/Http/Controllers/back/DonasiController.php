<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donasi;
use Midtrans\Snap;

class DonasiController extends Controller
{
    // Menampilkan daftar donasi
    public function index()
    {
        // Ambil semua donasi dari database
        $donasis = Donasi::all();

        // Kirimkan data donasi ke view index
        return view('backend.donasi.index', compact('donasis'));
    }

    // Menyimpan data donasi yang baru
    public function donasikan(Request $request)
    {
        $request->validate([
            'nama_pemdonasi' => 'required|string',
            'telepon_pemdonasi' => 'required|string',
            'jumlah_donasi' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
        ]);

        // Simpan donasi dengan status 'pending'
        $donasi = new Donasi();
        $donasi->user_id = auth()->user()->id;  // Mengambil ID pengguna yang sedang login
        $donasi->nama_pemdonasi = $request->nama_pemdonasi;
        $donasi->email_pemdonasi = auth()->user()->email;  // Mengambil email dari tabel users
        $donasi->telepon_pemdonasi = $request->telepon_pemdonasi;
        $donasi->jumlah_donasi = $request->jumlah_donasi;
        $donasi->metode_pembayaran = $request->metode_pembayaran;
        $donasi->anonim = $request->has('anonim');
        $donasi->status = 'pending'; // Status masih pending
        $donasi->save();

        // Arahkan ke halaman konfirmasi pembayaran dengan membawa ID donasi
        return redirect()->route('donasi.confirm', $donasi->id);
    }

    // Menampilkan halaman konfirmasi pembayaran
    public function showPaymentConfirmation($id)
    {
        // Mengambil data donasi berdasarkan ID
        $donasi = Donasi::findOrFail($id);

        // Mendapatkan snap token dari Midtrans
        $snapToken = $this->getSnapToken($donasi);

        // Mengirimkan data donasi dan snapToken ke view
        return view('payment', compact('donasi', 'snapToken'));
    }

    // Mendapatkan Snap Token dari Midtrans
    private function getSnapToken(Donasi $donasi)
    {
        // Membuat payload untuk Midtrans
        $payload = [
            'transaction_details' => [
                'order_id' => 'ORD-' . $donasi->id,
                'gross_amount' => $donasi->jumlah_donasi,
            ],
            'customer_details' => [
                'first_name' => $donasi->nama_pemdonasi,
                'email' => $donasi->email_pemdonasi,
                'phone' => $donasi->telepon_pemdonasi,
            ],
        ];

        // Mengambil token dari Midtrans API
        return Snap::getSnapToken($payload);
    }

    // Mengonfirmasi pembayaran
    public function confirmPayment($id)
    {
        // Mengambil data donasi berdasarkan ID
        $donasi = Donasi::findOrFail($id);

        // Jika donasi sudah dibayar, tampilkan pesan error
        if ($donasi->status == 'paid') {
            return redirect()->route('donasi.index')->with('error', 'Transaksi sudah dibayar.');
        }

        // Update status menjadi 'paid' setelah pembayaran berhasil
        $donasi->status = 'paid';
        $donasi->save();

        // Arahkan ke halaman index dengan pesan sukses
        return redirect()->route('donasi.index')->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }
}
