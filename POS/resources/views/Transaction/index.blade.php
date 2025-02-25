@extends('layout')

@section('title', 'Transaksi')

@section('content')
<h1>Halaman Transaksi</h1>
<p>Di sini akan muncul daftar produk yang dibeli, total harga, dan tombol untuk konfirmasi pembayaran.</p>

<!-- Contoh tabel transaksi -->
<table class="table table-striped">
  <thead>
    <tr>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Produk 1</td>
      <td>Rp100.000,-</td>
      <td>1</td>
      <td>Rp100.000,-</td>
    </tr>
    <tr>
      <td>Produk 2</td>
      <td>Rp150.000,-</td>
      <td>2</td>
      <td>Rp300.000,-</td>
    </tr>
  </tbody>
</table>

<button class="btn btn-success">Konfirmasi Pembayaran</button>
@endsection
