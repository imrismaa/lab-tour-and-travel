
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
                        <button class="dropdown-toggle" id="dropdownMenuButton">Temukan destinasi</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                            <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                            <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
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
                        <button class="dropdown-toggle" id="dropdownMenuButton">Pilih tema wisata</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                            <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                            <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
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
                        <button class="dropdown-toggle" id="dropdownMenuButton">Durasi wisata</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                            <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                            <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
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
                        <button class="dropdown-toggle" id="dropdownMenuButton">Rp 0 - Rp 120.000.000</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <label><input type="checkbox" value="Pilihan 1"> Option 1</label>
                            <label><input type="checkbox" value="Pilihan 2"> Option 2</label>
                            <label><input type="checkbox" value="Pilihan 3"> Option 3</label>
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
      </section>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var dropdownToggle = document.querySelector(".dropdown-toggle");
        var dropdownMenu = document.querySelector(".dropdown-menu");

        dropdownToggle.addEventListener("click", function(event) {
          event.stopPropagation();
          dropdownMenu.classList.toggle("show");
        });

        window.addEventListener("click", function(event) {
          if (!dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove("show");
          }
        });
      });
    </script>
  </body>
</html>