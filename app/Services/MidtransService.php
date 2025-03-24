<?php

namespace App\Services;

use Midtrans\Config;
use Midtrans\Snap;

class MidtransService
{
public function __construct()
{
    // Menggunakan variabel lingkungan untuk mengambil server dan client key
    Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
    Config::$isProduction = env('MIDTRANS_IS_PRODUCTION') === 'true';  // Tentukan lingkungan produksi jika diperlukan
    Config::$isSanitized = true;
    Config::$is3ds = true;
}


    public function createTransaction($donasi)
    {
        // Data transaksi Midtrans
        $transactionDetails = [
            'order_id' => 'ORD-' . $donasi->id,
            'gross_amount' => $donasi->jumlah_donasi,
        ];

        $customerDetails = [
            'first_name'    => $donasi->nama_pemdonasi,
            'email'         => 'donasi@website.com', // Atur sesuai kebutuhan
        ];

        // Membuat transaksi
        $transaction = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return $snapToken;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
