@extends('home');
@section('title','|Edit Produk')
@section('content')


   <div class="container" style="margin-bottom: 200px;">
    <div class="row">
        <div class="col-8">

            <h1 class="mt-3">FORM EDIT PRODUK</h1>

            <form method="post" action="{{url('/update') }}/{{$Toko->id}}" enctype="multipart/form-data" >
            {{ method_field('PATCH') }}
            @csrf
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" placeholder="masukan gambar" name="gambar" value="{{ old('gambar') }}">
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control" id="merek" placeholder="masukan merek" name="merek" value="{{ $Toko->merek }}" required>
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <input type="text" class="form-control" id="ket" placeholder="masukan ket" name="ket" value="{{ $Toko->ket }}" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="masukan harga" name="harga" value="{{ $Toko->harga }}" required>
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
            </form>


        </div>
    </div>
   </div>

@endsection
