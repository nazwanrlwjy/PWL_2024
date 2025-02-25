<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Toko Online')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Contoh styling sederhana */
    body {
      background: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
    }
    footer {
      margin-top: 2rem;
      padding: 1rem;
      background: #eee;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">Nama Toko</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
      aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/penjualan') }}">Transaksi</a>
        </li>
        <li class="nav-item">
         
          <a class="nav-link" href="{{ url('/user/22/name/Nazwa') }}">Profil</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Konten Halaman -->
  <div class="container mt-4">
    @yield('content')
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 - Toko Online</p>
  </footer>

  <!-- Bootstrap JS + dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
