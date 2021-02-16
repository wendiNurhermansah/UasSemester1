@extends('home');
@section('title','|Tambah Produk')
@section('content')

<h4 class="text-center font-weight-bold m-4" >Tambah Produk</h4>
   <div class="container" style="margin-bottom: 200px;">
    <div class="row">
        <div class="col-8">

            <h1 class="mt-3">FORM TAMBAH PRODUK</h1>

            <form method="post" action="{{ url('/tambahData') }}" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" placeholder="masukan gambar" name="gambar" value="{{ old('gambar') }}">
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control" id="merek" placeholder="masukan merek" name="merek" value="{{ old('merek') }}" required>
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <input type="text" class="form-control" id="ket" placeholder="masukan ket" name="ket" value="{{ old('ket') }}" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="masukan harga" name="harga" value="{{ old('harga') }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>


        </div>
    </div>
   </div>

@endsection
