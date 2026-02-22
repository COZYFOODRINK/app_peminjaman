<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Alat</title>
</head>
<body>
    <form action="{{ route('alat.update', $alat->id) }}" method="post">
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
            <label for="kategori_id">Kategori:</label>
            <select id="kategori_id" name="kategori_id" required>
                @foreach($kategori as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $alat->kategori_id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label for="nama_alat">Nama Alat:</label>
            <input type="text" id="nama_alat" name="nama_alat" value="{{ $alat->nama_alat }}" required>
        </div>

        <br>

        <div>
            <label for="jumlah_alat">Jumlah Alat:</label>
            <input type="number" id="jumlah_alat" name="jumlah_alat" value="{{ $alat->jumlah_alat }}" required>
        </div>

        <br>

        <div>
            <label for="harga">Harga:</label>
            <input type="number" step="0.01" id="harga" name="harga" value="{{ $alat->harga }}" required>
        </div>

        <br>

        <button type="submit">Submit</button>
</form>
</body>
</html>