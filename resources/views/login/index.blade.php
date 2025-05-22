<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Tambahkan CSS sesuai kebutuhan -->
</head>
<body>
    <h2>Login</h2>
    {{-- Tambahkan pesan error jika ada --}}
    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" action="{{ route('login.proses') }}">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="nisn">NISN:</label>
            <input type="text" id="nisn" name="nisn" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
