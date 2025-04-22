<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Biodata Saya</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('{{ asset('images/bg.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: Times New Roman, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .container {
            width: 400px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            box-sizing: border-box;
            overflow-y: auto;
            margin-left: 50px;
            color: #111827;
        }

        .photo-box {
            width: 150px;
            height: 200px; 
            margin: 0 auto 20px auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            background-color: #e5e7eb;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            font-size: 14px;
            color: #6b7280;
        }

        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding-left: 0;
            font-size: 16px;
        }

        ul li {
            margin-bottom: 10px;
        }

        p.time {
            margin-top: 20px;
            font-size: 14px;
            color: #4b5563;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $greeting }}, ini biodata saya:</h1>

        <div class="photo-box">
            <img src="{{ asset('images/foto.jpeg') }}" alt="Foto Saya" />
        </div>

        @if ($biodata)
            <ul>
                <li><strong>Nama:</strong> {{ $biodata->nama }}</li>
                <li><strong>Alamat:</strong> {{ $biodata->alamat }}</li>
                <li><strong>Email:</strong> {{ $biodata->email }}</li>
                <li><strong>Telepon:</strong> {{ $biodata->telepon }}</li>
            </ul>
        @else
            <p>Data biodata belum ada.</p>
        @endif

        <p class="time">Waktu akses: {{ $now->format('d-m-Y H:i:s') }} (WIB)</p>
    </div>
</body>
</html>
