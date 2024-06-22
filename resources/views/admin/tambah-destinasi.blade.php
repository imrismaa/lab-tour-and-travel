@extends('layouts.dashboard-nav')

@section('content')
<div class="container form-container">
    <h6 class="text-center mb-4">Tambah Destinasi</h6>
    <form action="">
        <label for="name">Nama Destinasi</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="jenis-destinasi">Jenis Destinasi</label>
            <select name="transportasi" id="transportasi" class="form-control mb-3 mt-2">
                <option value="1">--Pilih Jenis Destinasi--</option>
                <option value="2">Wisata</option>
                <option value="3">Restoran/Warung Makan</option>
            </select>
        <label for="name">Kota</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Jam Buka</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Jam Tutup</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="zona-waktu">Zona Waktu</label>
            <select name="transportasi" id="transportasi" class="form-control mb-3 mt-2">
                <option value="1">--Pilih Zona Waktu--</option>
                <option value="2">WIB</option>
                <option value="3">WITA</option>
                <option value="4">WIT</option>
            </select>
        <label for="name">Hari Destinasi Tutup</label>
            <select name="transportasi" id="transportasi" class="form-control mb-3 mt-2">
                <option value="1">--Pilih Hari--</option>
                <option value="2">Senin</option>
                <option value="3">Selasa</option>
                <option value="4">Rabu</option>
                <option value="5">Kamis</option>
                <option value="6">Jumat</option>
                <option value="7">Sabtu</option>
                <option value="8">Minggu</option>
            </select>
        <label for="name">Harga WNI</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Harga WN</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Tema Destinasi</label>
            <select name="transportasi" id="transportasi" class="form-control mb-3 mt-2">
                <option value="">--Pilih Tema Destinasi--</option>
                <option value="alam">Alam</option>
                <option value="kota">Kota</option>
                <option value="edukasi">Edukasi</option>
                <option value="seni budaya">Seni & Budaya</option>
                <option value="religi">Religi</option>
                <option value="keluarga">Keluarga</option>
                <option value="belajar">Belanja</option>
                <option value="wahana">Wahana Bermain</option>
                <option value="olahraga">Olahraga</option>
                <option value="kuliner">Kuliner</option>
                <option value="outdoor">Outdoor</option>
                <option value="indoor">Indoor</option>
                <option value="tanaman">Tanaman</option>
                <option value="binatang">Binatang</option>
                <option value="street food">Street Food</option>
                <option value="sea food">Sea Food</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="eksotis">Eksotis</option>
                <option value="lokal">Lokal</option>
                <option value="tradisional">Tradisional</option>
                <option value="modern">Modern</option>
                <option value="lesehan">Lesehan</option>
                <option value="prasmanan">Prasmanan</option>
                <option value="kafe">Kafe</option>
            </select>
        <label for="name">Foto</label>
        <input type="file" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Koordinat</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <label for="name">Deskripsi</label>
        <input type="text" name="name" id="name" class="form-control mb-3 mt-2" required>
        <div class="col d-flex justify-content-end">
            <a href="" style="text-decoration: none;">
                <button class="blue-pil mt-3 mx-3">Save</button>
            </a>
            <a href="" style="text-decoration: none;">
                <button class="red-pil mt-3">Cancel</button>
            </a>
        </div>
    </form>
</div>
@endsection