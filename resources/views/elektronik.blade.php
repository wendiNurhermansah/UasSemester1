@extends('home');
@section('title','|Elektronik')
@section('content')

<h4 class="text-center font-weight-bold m-4" >PRODUK TERBARU</h4>
   <div class="container" style="margin-bottom: 200px;">

    <div class="row mx-auto">
        @foreach ($Toko as $i)
        <div class="card mr-2 ml-2" style="width: 16rem;">
          <img src="{{ asset('images/ava/'.$i->gambar) }}" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">{{$i->merek}}</h5>
            <p class="card-text">{{$i->ket}}</p>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star-half-alt text-warning"></i>
            <i class="far fa-star  text-warning"></i><br>
            <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">DETAIL</a>
            <a href="#" class="btn btn-danger">Rp. {{$i->harga}}</a>
          </div>
        </div>
        @endforeach



      <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @foreach ($Toko as $i)
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{'images/ava/'.$i->gambar}}">
                </div>
                <div class="col-md-6">
                 <table class="table table-borderless">
                   <tr>
                     <th>Nama Produk</th>
                     <td>{{$i->merek}}</td>
                   </tr>
                   <tr>
                     <th>Keterangan</th>
                     <td>{{$i->ket}}</td>
                   </tr>
                   <tr>
                     <th>Biaya ongkir</th>
                     <td>sesuai</td>
                   </tr>
                   <tr>
                     <th>Rating</th>
                     <td>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <i class="far fa-star  text-warning"></i>
                    </td>
                   </tr>
                 </table>
                </div>
              </div>
            </div>
            @endforeach
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">kembali</button>
              <button type="button" class="btn btn-primary">Beli</button>
            </div>
          </div>
        </div>
      </div>
   </div>

@endsection
