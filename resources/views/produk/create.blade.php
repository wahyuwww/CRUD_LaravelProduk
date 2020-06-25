@extends('template/bootstrap')
@section('title')
Tambah data produk
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        Tambah Data produk
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="post" action="{{ route('produk.store')}}">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama produk</label>
                <input type="text" value="{{old('nama_produk')}}" class="form-control" name="nama_produk"
                    id="nama_produk" placeholder="Masukan Nama produk">
            </div>
            <div class="form-group">
                <label for="telp_produk">Telp produk</label>
                <input type="text" value="{{old('telp_produk')}}" class="form-control" id="telp_produk"
                    name="telp_produk" placeholder="Masukan Telp produk">
            </div>
            <div class="form-group">
                <label for="harga">harga produk</label>
                <input type="text" value="{{old('harga')}}" class="form-control" id="harga" name="harga"
                    placeholder="Masukan harga produk">
            </div>
            <div class="form-group">
                <label for="jumlah_produk">jumlah produk</label>
                <input type="text" value="{{old('jumlah_produk')}}" class="form-control" id="jumlah_produk"
                    name="jumlah_produk" placeholder="Masukan harga produk">
            </div>
            <div class="form-group">
                <label>Tanggal </label>
                <input type="date" class="form-control" name="tanggal_produk" value="{{old('tanggal_produk')}}" />
            </div>
            <div class="form-group">
                <label for="keterangan_produk">keterangan produk</label>
                <textarea name="keterangan_produk" id="keterangan_produk"
                    class="form-control">{{old('keterangan_produk')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection