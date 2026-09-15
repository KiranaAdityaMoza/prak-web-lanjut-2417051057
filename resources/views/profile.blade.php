<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .profile-card {
            background: #ffffff;
            width: 340px;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(14, 116, 144, 0.15);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e0f2fe;
        }

        .profile-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(14, 116, 144, 0.25);
        }

        .card-header {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            height: 125px;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .avatar-container {
            position: absolute;
            bottom: -55px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #ffffff;
            padding: 6px;
            box-shadow: 0 8px 20px rgba(2, 132, 199, 0.2);
        }

        .avatar {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 75px 25px 35px 25px;
            text-align: center;
        }

        .info-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-item {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f9ff;
            padding: 12px 20px;
            border-radius: 12px;
            border: 1px solid #bae6fd;
            transition: all 0.2s ease;
        }

        .info-item:hover {
            background-color: #e0f2fe;
            border-color: #7dd3fc;
        }

        .info-value {
            font-size: 15px;
            font-weight: 600;
            color: #0369a1;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="card-header">
            <div class="avatar-container">
                <div class="avatar">
                    <img src="{{ asset('img/KIRANA ADITYA MOZA.jpg.jpeg') }}" alt="Foto Profil">
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="info-group">
                <div class="info-item">
                    <span class="info-value">{{ $Nama }}</span>
                </div>
                <div class="info-item">
                    <span class="info-value">{{ $Kelas }}</span>
                </div>
                <div class="info-item">
                    <span class="info-value">{{ $NPM }}</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>