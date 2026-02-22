<form action="{{ route('alat.store') }}" method="post">
    @csrf

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <div>
        <label for="kategori_id">Pilih kategori:</label>
        <select id="kategori_id" name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label for="nama_alat">Masukan nama alat:</label>
        <input type="text" id="nama_alat" name="nama_alat" required>
    </div>

    <br>

    <div>
        <label for="jumlah_alat">Masukan jumlah alat:</label>
        <input type="number" id="jumlah_alat" name="jumlah_alat" required>
    </div>

    <br>

    <div>
        <label for="harga">Masukan harga alat:</label>
        <input type="text" id="harga" name="harga" required>
    </div>

    <button type="submit">Simpan Data Alat</button>
</form>