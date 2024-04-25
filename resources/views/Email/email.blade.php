<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Diterima</title>
</head>
<body>
    <h2>Formulir Anda Telah Diterima</h2>
    
    <p>Nama: {{ $formulir->nama }}</p>
    <p>Email: {{ $formulir->email }}</p>
    <p>Pesan:</p>
    <p>{{ $formulir->pesan }}</p>

    <p>Terima kasih telah mengirimkan formulir.</p>
</body>
</html>
