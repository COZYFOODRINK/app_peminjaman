<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Kategori</title>
</head>
<body>
    <form action="{{ route('kategori.store') }}" method="post">
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
            <label for="nama_kategori">Masukan kategori:</label>
            <input type="text" id="nama_kategori" name="nama_kategori" required>
        </div>

        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>