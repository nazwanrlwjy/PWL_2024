<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Home</title>
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #E0F7FA, #B2EBF2); /* Biru muda */
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #4A148C, #6A1B9A); /* Gradasi ungu tua ke ungu muda */
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .navbar h1 {
      font-size: 1.8rem;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: 600;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    /* Main Content */
    .container {
      flex: 1;
      padding: 40px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #4A148C; /* Warna ungu tua */
    }

    /* Product Cards */
    .products {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product-card {
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
      padding: 15px;
      text-align: center;
      width: 220px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .product-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }

    .product-card h3 {
      font-size: 1.1rem;
      margin: 10px 0;
      color: #333;
    }

    .product-card p {
      color: #2c3e50;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-card button {
      margin: 5px;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
    }

    .product-card button:first-of-type {
      background-color: #4A148C; /* Warna ungu tua */
      color: #fff;
    }

    .product-card button:first-of-type:hover {
      background-color: #6A1B9A; /* Warna ungu muda */
    }

    .product-card button:last-of-type {
      background-color: #00c6ff;
      color: #fff;
    }

    .product-card button:last-of-type:hover {
      background-color: #0072ff;
    }

    .product-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    /* Footer */
    .footer {
      background-color: #4A148C; /* Warna ungu tua */
      color: #fff;
      text-align: center;
      padding: 15px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <h1>Baby and Kid</h1>
    <div>
      <a href="http://localhost/PWL_2024/POS2/public/home">Home</a>
      <a href="http://localhost/PWL_2024/POS2/public/sales">Transaksi</a>
      <a href="http://localhost/PWL_2024/POS2/public/user/26/name/Nazwa%20Nurul%20Wijaya">Profil</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container">
    <h2>Produk Unggulan</h2>
    <div class="products">
      <!-- Product 1 -->
      <div class="product-card">
        <img src="{{ asset('image/shampoBaby.jpg') }}" alt="Produk 1" class="product-image" />
        <h3>My Baby Shampoo 100ml</h3>
        <p>Rp11.500</p>
        <button>+ Keranjang</button>
        <button>Beli</button>
      </div>

      <!-- Product 2 -->
      <div class="product-card">
        <img src="{{ asset('image/susuAnak.jpg') }}" alt="Produk 2" class="product-image" />
        <h3>Nutren Junior Vanila 400g</h3>
        <p>Rp163.000</p>
        <button>+ Keranjang</button>
        <button>Beli</button>
      </div>

      <!-- Product 3 -->
      <div class="product-card">
        <img src="{{ asset('image/baju.jpg') }}" alt="Produk 3" class="product-image" />
        <h3>One Set Anak</h3>
        <p>Rp92.000</p>
        <button>+ Keranjang</button>
        <button>Beli</button>
      </div>

      <!-- Product 4 -->
      <div class="product-card">
        <img src="{{ asset('image/botolSusu.jpg') }}" alt="Produk 4" class="product-image" />
        <h3>Preferred Dot Bayi Botol Susu</h3>
        <p>Rp31.501</p>
        <button>+ Keranjang</button>
        <button>Beli</button>
      </div>

      <!-- Product 5 -->
      <div class="product-card">
        <img src="{{ asset('image/popok.jpg') }}" alt="Produk 5" class="product-image" />
        <h3>Diapers MamyPoko</h3>
        <p>Rp50.000</p>
        <button>+ Keranjang</button>
        <button>Beli</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>&copy; 2025 - Nazwa Nurul Wijaya Point of Sales. All Rights Reserved.</p>
  </div>
</body>
</html>