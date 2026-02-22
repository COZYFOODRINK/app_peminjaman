<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alat</title>
</head>
<body>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Nama Alat</th>
                <th>Jumlah Alat</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alat as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->kategori->nama_kategori }}</td>
                <td>{{ $item->nama_alat }}</td>
                <td>{{ $item->jumlah_alat }}</td>
                <td>{{ $item->harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>