<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Pengguna</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            background: linear-gradient(135deg, #E0F7FA, #4A148C); /* Biru muda */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            background: #fff;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 360px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #4A148C; /* Warna ungu tua */
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            margin: 0.3rem 0;
        }

        .profile-card p span {
            font-weight: 600;
            color: #4A148C;
        }

        .btn {
            display: inline-block;
            margin-top: 1.2rem;
            padding: 0.6rem 1.5rem;
            background: #4A148C; /* Warna ungu tua */
            color: #fff;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #6A1B9A; /* Warna ungu muda */
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <!-- Profile Image Placeholder -->
        <img src="{{ asset('image/PP.jpg') }}" alt="Profile picture" class="profile-img">
        <h1>Profil Pengguna</h1>
        <p><span>ID:</span> {{ $id }}</p>
        <p><span>Nama:</span> {{ $name }}</p>

        <!-- Edit Profile Button -->
        <a href="http://localhost/PWL_2024/POS2/public/home" class="btn">Kembali</a>
    </div>
</body>
</html>