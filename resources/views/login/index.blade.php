<!DOCTYPE html>
<html>
<head>
    <title>Login Siswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: #f6f7fb;
            min-height: 100vh;
            overflow: hidden;
        }
        .container {
            display: flex;
            min-height: 100vh;
            height: 100vh;
            box-shadow: 0 4px 24px 0 rgba(42, 50, 80, 0.08);
            border-radius: 18px;
            overflow: hidden;
            margin: 0 auto;
            max-width: 900px;
            background: #fff;
        }
        .left-panel {
            background: #232946;
            width: 38%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 0 24px;
        }
        .left-panel h1 {
            font-size: 2rem;
            color: #fff;
            font-weight: 700;
            text-align: center;
            margin-bottom: 18px;
            margin-top: 0;
            letter-spacing: 0.5px;
            text-shadow: none;
        }
        .divider {
            width: 60%;
            height: 2px;
            background: #eebbc3;
            margin: 0 auto 18px auto;
            border-radius: 2px;
        }
        .logo-circle {
            width: 110px;
            height: 110px;
            /* background: #fff; */
            background: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 28px auto;
            box-shadow: none;
            border: none;
            overflow: hidden;
            padding: 0;
        }
        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            border: none;
        }
        .socials {
            position: absolute;
            bottom: 24px;
            left: 24px;
        }
        .socials p {
            margin: 0 0 8px 0;
            font-weight: 600;
            color: #eebbc3;
            font-size: 1rem;
        }
        .socials .btn-social {
            background: none;
            color: #eebbc3;
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            margin-right: 6px;
            margin-bottom: 0;
            transition: background 0.2s, color 0.2s;
            box-shadow: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .socials .btn-social:hover {
            background: #eebbc3;
            color: #232946;
        }
        .right-panel {
            width: 62%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }
        .login-form {
            width: 100%;
            max-width: 340px;
            padding: 36px 24px 28px 24px;
            background: #f6f7fb;
            border-radius: 16px;
            box-shadow: 0 2px 12px 0 #23294611;
            border: none;
            box-sizing: border-box;
        }
        .login-form label {
            font-size: 1rem;
            font-weight: 600;
            color: #232946;
            margin-bottom: 6px;
            display: block;
            letter-spacing: 0.2px;
        }
        .login-form input {
            width: calc(100% - 28px);
            padding: 12px 14px;
            border: 1px solid #eebbc3;
            border-radius: 10px;
            background: #fff;
            font-size: 1rem;
            margin-bottom: 18px;
            outline: none;
            color: #232946;
            transition: border 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 4px 0 #eebbc322;
            box-sizing: border-box;
        }
        .login-form input:focus {
            border: 1.5px solid #232946;
            background: #f6f7fb;
            box-shadow: 0 2px 8px 0 #23294622;
        }
        .login-form input::placeholder {
            color: #b0b0b0;
            font-size: 0.95rem;
        }
        .login-form .btn-login {
            width: 100%;
            padding: 13px 0;
            background: #232946;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            margin-bottom: 10px;
            box-shadow: 0 1px 6px 0 #23294611;
            transition: background 0.2s, color 0.2s;
        }
        .login-form .btn-login:hover {
            background: #eebbc3;
            color: #232946;
        }
        .login-form .forgot {
            display: block;
            text-align: center;
            color: #232946;
            text-decoration: none;
            font-size: 0.98rem;
            margin-top: 6px;
            transition: color 0.2s;
            font-weight: 500;
        }
        .login-form .forgot:hover {
            color: #eebbc3;
        }
        .error-message {
            color: #d8000c;
            background: #ffeaea;
            border: 1px solid #d8000c;
            border-radius: 8px;
            padding: 8px;
            margin-bottom: 14px;
            text-align: center;
            font-weight: 600;
            font-size: 1rem;
        }
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                box-shadow: none;
                border-radius: 0;
                margin: 0;
            }
            .left-panel, .right-panel {
                width: 100%;
                min-height: 220px;
            }
            .left-panel {
                padding-bottom: 60px;
            }
            .login-form {
                border-radius: 0 0 16px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1>Welcome to our<br>website</h1>
            <div class="divider"></div>
            <div class="logo-circle" style="overflow:hidden; padding:0; border:none;">
                <img src="/img/logo.png" alt="Logo SMEA" style="width:100%;height:100%;object-fit:cover;object-position:center;border-radius:50%;border:none;" />
            </div>
            <div class="socials">
                <p>Follow us</p>
                <button class="btn-social" title="Instagram">&#xf16d;</button>
                <button class="btn-social" title="Facebook">&#xf09a;</button>
                <button class="btn-social" title="X">&#xf099;</button>
            </div>
        </div>
        <div class="right-panel">
            <form class="login-form" method="POST" action="{{ route('login.proses') }}">
                @csrf
                @if(session('error'))
                    <div class="error-message" style="color:#d8000c;background:#ffd2d2;border:1px solid #d8000c;border-radius:4px;padding:8px;margin-bottom:15px;text-align:center;">
                        {{ session('error') }}
                    </div>
                @endif
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN anda" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                <button type="submit" class="btn-login">Masuk</button>
                <a href="#" class="forgot">Forgot password?</a>
                @if(session('nama_siswa'))
                    <div style="margin-top:20px;text-align:center;font-weight:700;color:#4a4e69;">Selamat datang, {{ session('nama_siswa') }}</div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>
