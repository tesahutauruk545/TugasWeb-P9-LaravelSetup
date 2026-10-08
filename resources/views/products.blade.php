<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        @foreach($products as $index => $product)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product['name'] }}</td>
            <td>Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
    
    <br>
    <a href="/">Kembali ke Home</a>
</body>
</html>