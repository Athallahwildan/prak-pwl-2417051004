<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0a0a0a;
            display: flex;
            justify-content: center;
            align-items: center; 
            min-height: 100vh; 
            margin: 0; 
        }
        .card {
            background-color: #1a2e1f;
            width: 350px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
            border: 3px solid #6b706c;
        }
        .foto {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #333;
            margin: 0 auto 20px;
            object-fit: cover;
            border: 3px solid #8e9490;
        }
        .data-item {
            background-color: #050505;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 2px solid #2a5234;
            font-size: 16px;
            color: #d8dcd9;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <img src="{{ asset('profil.jpeg') }}" alt="Foto" class="foto">
        
        <div class="data-item">
            {{ $Nama }}
        </div>
        <div class="data-item">
            {{ $Kelas }}
        </div>
        <div class="data-item">
            {{ $NPM }}
        </div>
    </div>

</body>
</html>