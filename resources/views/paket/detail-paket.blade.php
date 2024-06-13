
@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
    <header class="masthead">
            <div class="container px-5 mt-5">
                <h3>Selamat datang di Lab Tour & Travel, destinasi utama Anda untuk merencanakan dan menikmati liburan impian.</h3>
            </div>
    </header>
    <section id="price">
        <div class="col-me-auto">
            <small>Harga mulai dari</small>
            <h4>Rp 150.000</h4>
        </div>
        <div class="col-me-auto">
            <a href="" style="text-decoration: none;">
                <button class="blue-pil">Pesan Sekarang</button>
            </a>
        </div>
      </section>
    <div class="layout-container mt-4">
        
    </div>
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