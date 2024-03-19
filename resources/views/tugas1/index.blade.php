<!-- resources/views/customers/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
            <tr>
                <td>{{ $dt['nim'] }}</td>
                <td>{{ $dt['nama'] }}</td>
                <td>{{ $dt['alamat'] }}</td>
                <td>{{ $dt['hobi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
