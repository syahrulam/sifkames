<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebermas;
use App\Models\Dakwah;
use App\Models\Donasi;
use App\Services\MidtransService;
use App\Models\MuslimMedical;

class HalamanUtamaController extends Controller
{
    
    public function index()
    {
        return view('frontend.index');
    }

    protected $midtransService;

    public function __construct(MidtransService $midtransService)
    {
        $this->midtransService = $midtransService;
    }

    public function donasi()
    {
        $donasi = Donasi::all(); 
        return view('frontend.donasi.index', compact('donasi'));
    }

public function donasikan(Request $request)
{
    // Validasi input dari form
    $request->validate([
        'nama_pemdonasi' => 'required|string',
        'telepon_pemdonasi' => 'required|string',
        'jumlah_donasi' => 'required|numeric',
        'metode_pembayaran' => 'required|string',
    ]);

    // Simpan data donasi dengan status 'pending'
    $donasi = Donasi::create([
        'user_id' => auth()->user()->id,  // Menyimpan ID pengguna yang sedang login
        'nama_pemdonasi' => $request->nama_pemdonasi,
        'email_pemdonasi' => auth()->user()->email,  // Mengambil email dari pengguna yang sedang login
        'telepon_pemdonasi' => $request->telepon_pemdonasi,
        'jumlah_donasi' => $request->jumlah_donasi,
        'metode_pembayaran' => $request->metode_pembayaran,
        'anonim' => $request->has('anonim'),  // Menyimpan status anonim jika ada
        'status' => 'pending', // Status masih pending
    ]);

    // Buat transaksi dengan Midtrans
    $snapToken = $this->midtransService->createTransaction($donasi);

    // Arahkan ke halaman pembayaran dengan membawa token dan data donasi
    return view('frontend.donasi.payment', compact('snapToken', 'donasi'));
}

    // Halaman Dakwah
    public function dakwah()
    {
        $dakwah = Dakwah::all(); // Mengambil semua data dari tabel Dakwah
        return view('frontend.dakwah.index', compact('dakwah'));
    }

    public function dakwahdetail($id)
    {
        $dakwah = Dakwah::findOrFail($id); // Gunakan $dakwah agar konsisten
        return view('frontend.dakwah.detail', compact('dakwah'));
    }

    // Halaman Gebermas
    public function gebermas()
    {
        $aktivitas = Gebermas::all();
        return view('frontend.gebermas.index', compact('aktivitas'));
    }

    public function gebermasdetail($id)
    {
        $aktivitas = Gebermas::findOrFail($id);
        return view('frontend.gebermas.detail', compact('aktivitas'));
    }

    // Halaman Muslim Medical
    public function muslimMedical()
    {
        $kegiatan = MuslimMedical::all(); // Mengambil semua kegiatan dari tabel MuslimMedical
        return view('frontend.muslim_medical.index', compact('kegiatan'));
    }

    public function muslimMedicalDetail($id)
    {
        $kegiatan = MuslimMedical::findOrFail($id); // Mengambil detail kegiatan berdasarkan ID
        return view('frontend.muslim_medical.detail', compact('kegiatan'));
    }

    // Halaman SAR FKAM
    public function sarFkam()
    {
        return view('frontend.sar_fkam.index');
    }

    // Halaman Sejarah
    public function sejarah()
    {
        return view('frontend.sejarah.index');
    }

    // Halaman Tim
    public function team()
    {
        return view('frontend.team.index');
    }
}
