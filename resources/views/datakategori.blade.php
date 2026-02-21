<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $item->id) }}">Edit</a> | 
                    <a href="{{ route('kategori.delete', $item->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Delete</a>
            </tr>
            @endforeach
        </tbody>
    </table>
        
</body>
</html>