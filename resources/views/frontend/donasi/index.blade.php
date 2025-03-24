<form action="{{ route('donasi.proses') }}" method="POST">
    @csrf
    <label for="nama_pemdonasi">Nama Pemdonasi</label>
    <input type="text" id="nama_pemdonasi" name="nama_pemdonasi" required>
    
    <label for="jumlah_donasi">Jumlah Donasi</label>
    <input type="number" id="jumlah_donasi" name="jumlah_donasi" required>
    
    <button type="submit">Donasi</button>
</form>
