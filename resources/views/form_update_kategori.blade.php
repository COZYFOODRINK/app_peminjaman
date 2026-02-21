<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kategori</title>
</head>
<body>
        <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
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
            <label for="nama_kategori">Name Kategori:</label>
            <input type="text" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>