<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Produk;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['nama_Produk'] = "toko jaya";
        // $data['keterangan_Produk'] = "gresik";

        // $nama_Produk = "toko apa aja";
        // $data_Produk = [
        //     [
        //         "nama_Produk" => "cv.nakula sadewa",
        //         "keterangan_Produk" => "jalan candi"
        //     ], 
        //     [
        //         "nama_Produk" => "cv.umm",
        //         "keterangan_Produk" => "jalan tlogomas"
        //     ]
        // ];



        // return view('produk/index', compact('nama_produk','data_produk'));

        // return view('produk/index');
        $data_produk = Produk::all();
        return view('produk/index', compact('data_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mendapatkan satu saja
        //dd($request->input('nama_produk'));

        //mendapatkan semua dengan tokennya
        //dd($request->all());


        // return "Nama Suplier = ".$request->input('nama_produk')." - Telp = ".$request->input('telp_produk')." 
        //- keterangan produk = ".$request->input('keterangan_produk');

        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_produk' => 'required|string|min:2|max:100',
            'telp_produk' => 'required|numeric',
            'harga' => 'required|numeric',
            'jumlah_produk' => 'required|numeric',
            'keterangan_produk' => 'required|string|min:2|max:100'


        ]);

        if ($validator->fails()) {
            return redirect()->route('produk.create')->withErrors($validator)->withInput();
        }

        Produk::create($request->all());

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_produk = Produk::findOrFail($id);
        return view('produk.show', compact('data_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk/edit', compact('produk'));
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
        $produk = Produk::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input, [
            'nama_produk' => 'required|string|min:2|max:100',
            'telp_produk' => 'required|numeric',
            'harga' => 'required|numeric',
            'jumlah_produk' => 'required|numeric',
            'keterangan_produk' => 'required|string|min:2|max:100'



        ]);

        if ($validator->fails()) {
            return redirect()->route('produk.edit', [$id])->withErrors($validator);
        }
        $produk->update($request->all());

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
