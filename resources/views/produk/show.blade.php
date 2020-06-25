{{-- ini adadalah komentar

@php 
 $keterangan_produk="jalan jalan";
 $nilai = 10;
@endphp

Nama produk : {{ $nama_produk}}
<br />
keterangan produk : {{ $keterangan_produk}}
<hr />

@if($nilai >= 90)
nilai baik sekali
@elseif($nilai > 70 && $nilai
<= 90) nilai cukup baik @else nilai kurang @endif <hr />

@foreach ($data_produk as $row)
nama produk : {{$row ['nama_produk']}}
<br />
keterangan produk : {{$row ['keterangan_produk']}}
<hr />
@endforeach
<hr />
@forelse ($data_produk as $row)
nama produk : {{$row ['nama_produk']}}
<br />
keterangan produk : {{$row ['keterangan_produk']}}
<hr />
@empty
data kosaong

@endforelse --}}

@extends('template/bootstrap')
@section('title')
detail data produk
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        Detail Data produk
    </div>
    <div class="card-body">
        <a href="{{route('produk.index')}}" class="btn btn-success">Kembali</a>
        <hr />
        <table class="table table-bordered">
            <tr>
                <td>Nama produk</td>
                <td>:</td>
                <td>{{$data_produk->nama_produk}}</td>
            </tr>
            <tr>
                <td>Telepon produk</td>
                <td>:</td>
                <td>{{$data_produk->telp_produk}}</td>
            </tr>
            <tr>
                <td>Harga produk</td>
                <td>:</td>
                <td>@rupiah($data_produk->harga)</td>
            </tr>
            <tr>
                <td>Jumlah produk</td>
                <td>:</td>
                <td>{{$data_produk->jumlah_produk}}</td>
            </tr>
            <tr>
                <td>Tanggal produk</td>
                <td>:</td>
                <td>{{$data_produk->tanggal_produk}}</td>
            </tr>
            <tr>
                <td>keterangan produk</td>
                <td>:</td>
                <td>{{$data_produk->keterangan_produk}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection