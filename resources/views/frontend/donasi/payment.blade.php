<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>

<h2>Donasi Anda</h2>
<p>Jumlah Donasi: {{ $donasi->jumlah_donasi }}</p>

<!-- Script untuk menggunakan Snap Midtrans -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

<button id="pay-button">Bayar Sekarang</button>

<script type="text/javascript">
    document.getElementById('pay-button').onclick = function () {
        snap.pay('{{ $snapToken }}', {
            onSuccess: function (result) {
                alert("Transaksi berhasil! \n" + JSON.stringify(result));
                // Anda bisa membuat panggilan AJAX untuk mengupdate status donasi di sini
            },
            onPending: function (result) {
                alert("Transaksi tertunda! \n" + JSON.stringify(result));
                // Anda bisa mengupdate status ke pending di sini
            },
            onError: function (result) {
                alert("Transaksi gagal! \n" + JSON.stringify(result));
                // Anda bisa mengupdate status ke gagal di sini
            }
        });
    }
</script>

</body>
</html>
