<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(120deg, #22223b 0%, #4a4e69 100%);
            min-height: 100vh;
        }
        .container {
            display: flex;
            min-height: 100vh;
            box-shadow: 0 8px 32px 0 rgba(42, 50, 80, 0.18);
            border-radius: 28px;
            overflow: hidden;
            margin: 32px auto;
            max-width: 1100px;
            background: rgba(255,255,255,0.92);
        }
        .left-panel {
            background: linear-gradient(135deg, #22223b 80%, #4a4e69 100%);
            width: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 0 30px;
        }
        .left-panel h1 {
            font-size: 2.5rem;
            color: #f2e9e4;
            font-weight: 800;
            text-align: center;
            margin-bottom: 30px;
            margin-top: 0;
            letter-spacing: 1px;
            text-shadow: 0 2px 8px #22223b44;
        }
        .divider {
            width: 80%;
            height: 2px;
            background: linear-gradient(90deg, #c9ada7 0%, #22223b 100%);
            margin: 0 auto 30px auto;
            border-radius: 2px;
        }
        .logo-circle {
            width: 160px;
            height: 160px;
            background: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f2e9e4;
            font-size: 1.3rem;
            font-weight: 700;
            margin: 0 auto 40px auto;
            box-shadow: none;
            border: none;
            letter-spacing: 1px;
            overflow:hidden;
            padding:0;
        }
        .logo-circle img {
            width:100%;
            height:100%;
            object-fit:cover;
            object-position:center;
            border-radius:50%;
            border:none;
        }
        .socials {
            position: absolute;
            bottom: 30px;
            left: 30px;
        }
        .socials p {
            margin: 0 0 10px 0;
            font-weight: 700;
            color: #c9ada7;
            font-size: 1.1rem;
        }
        .socials .btn-social {
            background: #c9ada7;
            color: #22223b;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            margin-right: 8px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            margin-bottom: 5px;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px 0 #c9ada744;
        }
        .socials .btn-social:hover {
            background: #9a8c98;
            color: #f2e9e4;
        }
        .right-panel {
            width: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.98);
        }
        .login-form {
            width: 100%;
            max-width: 420px;
            padding: 48px 32px 40px 32px;
            background: #f2e9e4;
            border-radius: 24px;
            box-shadow: 0 4px 24px 0 #4a4e6922;
            border: 1.5px solid #c9ada7;
        }
        .login-form label {
            font-size: 1.1rem;
            font-weight: 700;
            color: #4a4e69;
            margin-bottom: 8px;
            display: block;
            letter-spacing: 0.5px;
        }
        .login-form input {
            width: 100%;
            padding: 14px 18px;
            border: 1.5px solid #c9ada7;
            border-radius: 14px;
            background: #fff;
            font-size: 1.1rem;
            margin-bottom: 24px;
            outline: none;
            color: #22223b;
            transition: border 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px 0 #c9ada722;
        }
        .login-form input:focus {
            border: 1.5px solid #4a4e69;
            background: #f2e9e4;
            box-shadow: 0 2px 12px 0 #4a4e6922;
        }
        .login-form input::placeholder {
            color: #b0b0b0;
            font-size: 1rem;
        }
        .login-form .btn-login {
            width: 100%;
            padding: 16px 0;
            background: linear-gradient(90deg, #4a4e69 60%, #22223b 100%);
            color: #f2e9e4;
            border: none;
            border-radius: 14px;
            font-size: 1.2rem;
            font-weight: 800;
            cursor: pointer;
            margin-bottom: 12px;
            box-shadow: 0 2px 12px 0 #4a4e6922;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        }
        .login-form .btn-login:hover {
            background: linear-gradient(90deg, #22223b 60%, #4a4e69 100%);
            color: #c9ada7;
            box-shadow: 0 4px 16px 0 #4a4e6922;
        }
        .login-form .forgot {
            display: block;
            text-align: center;
            color: #4a4e69;
            text-decoration: none;
            font-size: 1.05rem;
            margin-top: 8px;
            transition: color 0.2s;
            font-weight: 600;
        }
        .login-form .forgot:hover {
            color: #9a8c98;
        }
        .error-message {
            color:#d8000c;
            background:#ffd2d2;
            border:1px solid #d8000c;
            border-radius:8px;
            padding:10px;
            margin-bottom:18px;
            text-align:center;
            font-weight: 600;
            font-size: 1.1rem;
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
                min-height: 300px;
            }
            .left-panel {
                padding-bottom: 120px;
            }
            .login-form {
                border-radius: 0 0 24px 24px;
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
                <button class="btn-social">IG</button>
                <button class="btn-social">FB</button>
                <button class="btn-social">X</button>
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
                <input type="text" id="nisn" name="nisn" placeholder="Masukan NISN anda" value="1234567890" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" value="passwordanda" required>
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
