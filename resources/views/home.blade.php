<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="latihan1.css">


    <title>WENDI SHOP @yield('title')</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
          <i class="fas fa-shopping-cart mr-3"></i>
          <a class="navbar-bran font-weight-bold font-color-dark" href="{{url('/')}}">TOKO WENDI</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Reseller<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Hubungi Kami<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Bantuan<span class="sr-only">(current)</span></a>
              </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="icon mt-3">
              <h5>
                <i class="fas fa-shopping-cart ml-4 mr-3" data-toggle="tooltip" title="Keranjang belanja"></i>
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Kotak Masuk"></i>
                <i class="far fa-bell mr-3" data-toggle="tooltip" title="notivikasi"></i>
              </h5>
            </div>
          </div>
        </div>
      </nav>


      <div class="row mt-5 no-gutters">
        <div class="col-md-2 bg-light">
          <ul class="list-group list-group-flush p-2 pt-4">
            <li class="list-group-item bg-danger"><i class="fas fa-list"></i>KATEGORI PRODUK</li>
            <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="{{url('/elektronik')}}"><span> Peralatan Elektronik</span></a></li>
            <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="{{url('/DaftarProduk')}}"> Daftar Produk</a></li>
            <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="{{url('/tambahProduk')}}">Tambah produk</a> </li>

          </ul>
        </div>
        <div class="col-md-10">



           @yield('content')

        </div>

      </div>
      </div>



      <footer class="bg-dark text-white p-5">
        <div class="row">
          <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
              <li>Pusat Bantuan</li>
              <li>Cara Pembelian</li>
              <li>Pengiriman</li>
              <li>cara pengembalian</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>TENTANG KAMI</h5>
            <p>Toko menyediakan berbagai barang elektronik di Indonesia.
            </p>
          </div>
          <div class="col-md-3">
            <h5>MITRA KERJA</h5>
            <ul>
              <li>JNE</li>
              <li>POS INDONESIA</li>
              <li>GOJEK</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>HUBUNGI KAMI</h5>
            <ul>
              <li>081214255669</li>
              <li>nurhermasahwendi@gmail.com</li>

            </ul>
          </div>
        </div>
      </footer>

      <div class="copyright text-center text-white font-weight-bold bg-warning p-4">
        <P>WENDI NURHERMANSAH || copyright <i class="far fa-copyright">2020</i></P>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="latihan1.js"></script>
  </body>

</html>
