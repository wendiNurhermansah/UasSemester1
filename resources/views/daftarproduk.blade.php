@extends('home');
@section('title','|Elektronik')
@section('content')

<h4 class="text-center font-weight-bold m-4" >Daftar Produk</h4>
   <div class="container" style="margin-bottom: 200px;">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Merek</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Tindakan</th>

          </tr>
        </thead>
        <tbody>
            @foreach ( $Toko as $i)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$i->gambar}}</td>
            <td>{{$i->merek}}</td>
            <td>{{$i->ket}}</td>
            <td>{{$i->harga}}</td>
            <td>
                    <a href="{{url('/edit') }}/{{$i->id}}" class="badge badge-success">edit</a>
                    <a href="{{url('/delete') }}/{{$i->id}}" class="badge badge-danger">hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>

@endsection
