
@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
<section id="paket">
    <div class="layout-container">
        <div class="filter-wisata py-5 px-5">
            <h4 class="text-start">Filter Paket Wisata</h4>
            <div class="row text-start mt-3">
                <div class="col-md-3 px-3">
                    <p>Destinasi</p>
                    <div class="dropdown">
                        <button class="dropdown-toggle toggle-destinasi" id="dropdownMenuButton">Temukan destinasi</button>
                        <div class="dropdown-menu menu-destinasi" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-container">
                                <label><input type="checkbox" value="Pilihan 1">Yogyakarta</label>
                                <label><input type="checkbox" value="Pilihan 2">Luar Yogyakarta</label>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <a href="" class="blue-link">Hapus</a>
                                </div>
                                <div class="col">
                                    <button class="blue-pil">Terapkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-3">
                    <p>Tema</p>
                    <div class="dropdown">
                        <button class="dropdown-toggle toggle-tema" id="dropdownMenuButton">Pilih tema wisata</button>
                        <div class="dropdown-menu menu-tema" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-container">
                                <label><input type="checkbox" value="Pilihan 1">Alam</label>
                                <label><input type="checkbox" value="Pilihan 2">Kota</label>
                                <label><input type="checkbox" value="Pilihan 3">Edukasi</label>
                                <label><input type="checkbox" value="Pilihan 3">Seni & Budaya</label>
                                <label><input type="checkbox" value="Pilihan 3">Religi</label>
                                <label><input type="checkbox" value="Pilihan 3">Keluarga</label>
                                <label><input type="checkbox" value="Pilihan 3">Belanja</label>
                                <label><input type="checkbox" value="Pilihan 3">Wahana Bermain</label>
                                <label><input type="checkbox" value="Pilihan 3">Olahraga</label>
                                <label><input type="checkbox" value="Pilihan 3">Kuliner</label>
                                <label><input type="checkbox" value="Pilihan 3">Outdoor</label>
                                <label><input type="checkbox" value="Pilihan 3">Indoor</label>
                                <label><input type="checkbox" value="Pilihan 3">Tanaman</label>
                                <label><input type="checkbox" value="Pilihan 3">Binatang</label>
                                <label><input type="checkbox" value="Pilihan 3">Street Food</label>
                                <label><input type="checkbox" value="Pilihan 3">Sea Food</label>
                                <label><input type="checkbox" value="Pilihan 3">Vegetarian</label>
                                <label><input type="checkbox" value="Pilihan 3">Eksotis</label>
                                <label><input type="checkbox" value="Pilihan 3">Lokal</label>
                                <label><input type="checkbox" value="Pilihan 3">Tradisional</label>
                                <label><input type="checkbox" value="Pilihan 3">Modern</label>
                                <label><input type="checkbox" value="Pilihan 3">Lesehan</label>
                                <label><input type="checkbox" value="Pilihan 3">Prasmanan</label>
                                <label><input type="checkbox" value="Pilihan 3">Kafe</label>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <a href="" class="blue-link">Hapus</a>
                                </div>
                                <div class="col">
                                    <button class="blue-pil">Terapkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-3">
                    <p>Durasi</p>
                    <div class="dropdown">
                        <button class="dropdown-toggle toggle-durasi" id="dropdownMenuButton">Durasi wisata</button>
                        <div class="dropdown-menu menu-durasi" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-container">
                                <label><input type="checkbox" value="Pilihan 1">1 Hari</label>
                                <label><input type="checkbox" value="Pilihan 2">2 Hari</label>
                                <label><input type="checkbox" value="Pilihan 3">3 Hari</label>
                                <label><input type="checkbox" value="Pilihan 4">4 Hari</label>
                                <label><input type="checkbox" value="Pilihan 5">5 Hari</label>
                                <label><input type="checkbox" value="Pilihan 6">>5 Hari</label>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <a href="" class="blue-link">Hapus</a>
                                </div>
                                <div class="col">
                                  <button class="blue-pil">Terapkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-3">
                    <p>Harga</p>
                    <div class="dropdown">
                        <button class="dropdown-toggle toggle-harga" id="dropdownMenuButton">Rp 0 - Rp 120.000.000</button>
                        <div class="dropdown-menu menu-harga" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-container">
                                <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                                <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                                <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
                            </div>
                            <div class="row px-3">
                                <div class="col">
                                    <a href="" class="blue-link">Hapus</a>
                                </div>
                                <div class="col">
                                    <button class="blue-pil">Terapkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="layout-container">
    <div class="row row-custom justify-content-start">
        <div class="col col-custom d-flex">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <img src="/images/image1.png" class="card-img" alt="Your Image">
                    <div class="overlay-container">
                        <div class="overlay-text">
                            <p class="paket">Lorem ipsum dolor sit amet</p>
                            <span class="badge price">Rp. 150.000</span>
                            <a href="#"><p>Lihat detail ></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-custom d-flex">
            <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                    <img src="/images/image2.jpg" class="card-img" alt="Your Image">
                    <div class="overlay-container">
                        <div class="overlay-text">
                            <p class="paket">Lorem ipsum dolor sit amet</p>
                            <span class="badge price">Rp. 150.000</span>
                            <a href="#"><p>Lihat detail ></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-custom d-flex">
            <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                    <img src="/images/image3.jpg" class="card-img" alt="Your Image">
                    <div class="overlay-container">
                        <div class="overlay-text">
                            <p class="paket">Lorem ipsum dolor sit amet</p>
                            <span class="badge price">Rp. 150.000</span>
                            <a href="#"><p>Lihat detail ></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-custom d-flex">
            <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                    <img src="/images/image4.jpg" class="card-img" alt="Your Image">
                    <div class="overlay-container">
                        <div class="overlay-text">
                            <p class="paket">Lorem ipsum dolor sit amet</p>
                            <span class="badge price">Rp. 150.000</span>
                            <a href="#"><p>Lihat detail ></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col col-custom d-flex">
              <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                  <img src="/images/image5.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-custom d-flex">
              <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                  <img src="/images/image6.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-custom d-flex">
              <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                  <img src="/images/image7.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-custom d-flex">
              <div class="card" style="width: 16rem;">
                <div class="card-body"> 
                  <img src="/images/image8.jpg" class="card-img" alt="Your Image">
                  <div class="overlay-container">
                    <div class="overlay-text">
                      <p class="paket">Lorem ipsum dolor sit amet</p>
                      <span class="badge price">Rp. 150.000</span>
                      <a href="#"><p>Lihat detail ></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-custom d-flex">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                        <img src="/images/image1.png" class="card-img" alt="Your Image">
                        <div class="overlay-container">
                            <div class="overlay-text">
                                <p class="paket">Lorem ipsum dolor sit amet</p>
                                <span class="badge price">Rp. 150.000</span>
                                <a href="#"><p>Lihat detail ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
            <a href="#" class="blue-link show-more pe-4">Tampilkan lebih banyak > </a>
        </div>
    </div>
</div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var toggleDestinasi = document.querySelector(".toggle-destinasi");
            var menuDestinasi = document.querySelector(".menu-destinasi");

            toggleDestinasi.addEventListener("click", function(event) {
            event.stopPropagation();
            menuDestinasi.classList.toggle("show");
            });

            window.addEventListener("click", function(event) {
            if (!menuDestinasi.contains(event.target)) {
                menuDestinasi.classList.remove("show");
            }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var toggleTema = document.querySelector(".toggle-tema");
            var menuTema = document.querySelector(".menu-tema");

            toggleTema.addEventListener("click", function(event) {
            event.stopPropagation();
            menuTema.classList.toggle("show");
            });

            window.addEventListener("click", function(event) {
            if (!menuTema.contains(event.target)) {
                menuTema.classList.remove("show");
            }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var toggleDurasi = document.querySelector(".toggle-durasi");
            var menuDurasi = document.querySelector(".menu-durasi");

            toggleDurasi.addEventListener("click", function(event) {
            event.stopPropagation();
            menuDurasi.classList.toggle("show");
            });

            window.addEventListener("click", function(event) {
            if (!menuDurasi.contains(event.target)) {
                menuDurasi.classList.remove("show");
            }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var toggleHarga = document.querySelector(".toggle-harga");
            var menuHarga = document.querySelector(".menu-harga");

            toggleHarga.addEventListener("click", function(event) {
            event.stopPropagation();
            menuHarga.classList.toggle("show");
            });

            window.addEventListener("click", function(event) {
            if (!menuHarga.contains(event.target)) {
                menuHarga.classList.remove("show");
            }
            });
        });
    </script>
  </body>
</html>