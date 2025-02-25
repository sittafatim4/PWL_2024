@extends('layout')

@section('content')
    <h1>💰 Halaman Penjualan</h1>
    <p>Menampilkan halaman transaksi POS.</p>

    <table border="1" width="100%" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Produk A</td>
                <td>Rp10.000</td>
                <td>2</td>
                <td>Rp20.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Produk B</td>
                <td>Rp15.000</td>
                <td>1</td>
                <td>Rp15.000</td>
            </tr>
        </tbody>
    </table>

    <h2>Total Bayar: Rp35.000</h2>

    <button onclick="alert('Transaksi Berhasil!')" 
        style="padding: 10px; background: green; color: white; border: none; cursor: pointer;">
        ✅ Bayar Sekarang
    </button>
@endsection
