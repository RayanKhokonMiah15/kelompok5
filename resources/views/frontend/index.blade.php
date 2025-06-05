<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Absen Siswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ffffff;;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 340px;
            background: linear-gradient(135deg, #6366f1 0%, #818cf8 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 36px 0 24px 0;
            position: relative;
            box-shadow: 2px 0 16px 0 #6366f133;
            border-top-left-radius: 24px;
            border-bottom-left-radius: 24px;
        }
        .nama-siswa {
            background: #fff;
            color: #6366f1;
            border-radius: 24px;
            padding: 12px 36px;
            font-size: 22px;
            margin-bottom: 28px;
            border: none;
            font-weight: 700;
            box-shadow: 0 2px 12px #6366f122;
            letter-spacing: 0.5px;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 18px;
            border: 4px solid #fff;
            box-shadow: 0 4px 16px #6366f144;
        }
        .divider {
            width: 70%;
            border-top: 2px solid #a5b4fc;
            margin: 12px 0 28px 0;
        }
        .sidebar-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            gap: 16px;
        }
        .sidebar-btn {
            background: linear-gradient(90deg, #818cf8 0%, #6366f1 100%);
            color: #fff;
            border: none;
            border-radius: 14px;
            padding: 14px 32px;
            font-size: 16px;
            cursor: pointer;
            width: 75%;
            text-align: center;
            font-weight: 500;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px #6366f122;
        }
        .sidebar-btn:hover {
            background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%);
            transform: translateY(-2px) scale(1.04);
        }
        .arrow {
            display: none;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 0 24px 24px 0;
            margin: 24px 0 24px 0;
            position: relative;
            box-shadow: 0 4px 32px #6366f122;
        }
        .absen-box {
            background: linear-gradient(135deg, #e0e7ff 0%, #fff 100%);
            border-radius: 18px;
            padding: 40px 60px 60px 60px;
            min-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 2px 16px #6366f122;
        }
        .absen-title {
            font-size: 2rem;
            font-weight: 700;
            color: #6366f1;
            margin-bottom: 40px;
            text-align: center;
            letter-spacing: 1px;
        }
        .input-group {
            width: 100%;
            margin-bottom: 28px;
        }
        .input-field, .select-field {
            width: 100%;
            padding: 14px 20px;
            border-radius: 14px;
            border: 2px solid #a5b4fc;
            background: #fff;
            color: #6366f1;
            font-size: 16px;
            margin-top: 8px;
            box-shadow: 0 1px 4px #6366f111;
            transition: border 0.2s;
        }
        .input-field:focus, .select-field:focus {
            border: 2px solid #6366f1;
            outline: none;
        }
        .select-field {
            appearance: none;
            -webkit-appearance: none;
            background: #fff url('data:image/svg+xml;utf8,<svg fill="%236366f1" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>') no-repeat right 16px center/18px 18px;
        }
        .bottom-btns {
            display: flex;
            gap: 40px;
            justify-content: center;
            margin-top: 40px;
        }
        .bottom-btn {
            background: linear-gradient(90deg, #818cf8 0%, #6366f1 100%);
            border-radius: 16px;
            padding: 24px 32px;
            font-size: 16px;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: 600;
            min-width: 170px;
            text-align: center;
            box-shadow: 0 2px 8px #6366f122;
            transition: background 0.2s, transform 0.2s;
        }
        .bottom-btn:hover {
            background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%);
            transform: translateY(-2px) scale(1.04);
        }
        @media (max-width: 900px) {
            .container { flex-direction: column; }
            .sidebar { width: 100%; height: auto; }
            .main-content { margin: 0; border-radius: 0; }
            .absen-box { min-width: unset; width: 90vw; }
        }
        /* Animasi masuk */
        .main-content, .sidebar {
            animation: fadeIn 1.2s cubic-bezier(.4,0,.2,1);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: none; }
        }
    </style>
    <script>
        // Efek klik pada tombol sidebar dan bawah
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.sidebar-btn, .bottom-btn').forEach(function(btn) {
                btn.addEventListener('mousedown', function() {
                    btn.style.transform = 'scale(0.97)';
                });
                btn.addEventListener('mouseup', function() {
                    btn.style.transform = '';
                });
                btn.addEventListener('mouseleave', function() {
                    btn.style.transform = '';
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="nama-siswa">{{ auth()->user()->name }}</div>
            <img src="https://www.intipesan.com/wp-content/uploads/2018/07/IMG-20180703-WA0004.jpg" alt="Foto Profil" class="profile-img">
            <div class="divider"></div>
            <div class="sidebar-buttons">
                <button class="sidebar-btn">Halaman Utama Absen</button>
                <button class="sidebar-btn">Daftar Absen</button>
                <button class="sidebar-btn">Jadwal Pelajaran</button>
            </div>
        </div>
        <div class="main-content">
            <form class="absen-box">
                <div class="absen-title">Silahkan Absen Disini</div>
                <div class="input-group">
                    <input type="text" class="input-field" placeholder="Masukkan NISN Anda" />
                </div>
                <div class="input-group">
                    <select class="select-field">
                        <option selected disabled>Pilih Status Absen</option>
                        <option>Hadir</option>
                        <option>Izin</option>
                        <option>Sakit</option>
                        <option>Alpa</option>
                    </select>
                </div>
            </form>
            <div class="bottom-btns">
                <button class="bottom-btn">Lihat Jadwal Pelajaran</button>
                <button class="bottom-btn">Lihat Riwayat Absen</button>
            </div>
        </div>
    </div>
</body>
</html>

