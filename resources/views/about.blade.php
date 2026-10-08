<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>
    <h1>Tentang Kami</h1>
    <p>Ini adalah halaman About.</p>
    
    <h2>Daftar Anggota Tim:</h2>
    <ul>
        @foreach($anggota as $nama)
            <li>{{ $nama }}</li>
        @endforeach
    </ul>
    
    <a href="/">Kembali ke Home</a>
</body>
</html>