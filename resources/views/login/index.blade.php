<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        .bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100vw;
            min-height: 100vh;
            width: auto;
            height: auto;
            z-index: -1;
            object-fit: cover;
        }
        .card {
            background: #fff;
            max-width: 350px;
            margin: 60px auto;
            padding: 30px 25px 25px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            position: relative;
            z-index: 1;
        }
        .card h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 16px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
        }
        .btn-login {
            width: 100%;
            padding: 10px 0;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-login:hover {
            background: #0056b3;
        }
        .error-message {
            color: #d8000c;
            background: #ffd2d2;
            border: 1px solid #d8000c;
            border-radius: 4px;
            padding: 8px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <video class="bg-video" autoplay muted loop>
        <source src="{{ asset('video/background.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="card">
        <h2>Login</h2>
        {{-- Tambahkan pesan error jika ada --}}
        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login.proses') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nisn">NISN:</label>
                <input type="text" id="nisn" name="nisn" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
    <div style="text-align:center; color:#fff; margin-top:20px; text-shadow:0 1px 3px #000;">
        &copy; {{ date('Y') }} Tugas PAA Sep
    </div>
</body>
</html>
