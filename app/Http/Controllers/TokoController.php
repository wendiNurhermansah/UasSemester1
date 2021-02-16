<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Toko = Toko::all();
        return view('elektronik', compact('Toko'));
    }

    public function DaftarProduk(){
        $Toko = Toko::all();
        return view ('daftarproduk', compact('Toko'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'gambar' => 'required',
            'merek' => 'required',
            'ket' => 'required',
            'harga' => 'required'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $request->file('gambar')->move("images/ava/", $nama_file);




        Toko::create([
            'gambar' => $nama_file,
            'merek' => $request->merek,
            'ket' => $request->ket,
            'harga' => $request->harga

        ]);

        return redirect('/DaftarProduk')->with('status', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Toko = Toko::find($id);
        return view('edit', compact('Toko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Toko = Toko::find($id);



        if($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time()."_".$file->getClientOriginalName();
            $request->file('gambar')->move("images/ava/", $nama_file);
            $path = 'images/ava/'.$Toko->gambar;
            \File::delete(public_path($path));

            $Toko->gambar = $nama_file;

        }

        $Toko->merek = $request->merek;

        $Toko->ket = $request->ket;
        $Toko->harga = $request->harga;

        $Toko->update();

        return redirect('/DaftarProduk')->with('status', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Toko = Toko::find($id);
        $path = 'images/ava/'.$Toko->gambar;
        \File::delete(public_path($path));
        $Toko->delete();
        return redirect('/DaftarProduk')->with('status', 'data berhasil dihapus');
    }
}
