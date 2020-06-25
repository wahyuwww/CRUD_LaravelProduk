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
tampil data produk
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        Tampil Data produk
    </div>
    <div class="card-body">
        <a href="{{route('produk.create')}}" class="btn btn-success">create</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Telpon produk</th>
                <th>Harga produk</th>
                <th>Jumlah produk</th>
                <th>Tanggal produk</th>
                <th>keterangan produk</th>
                <th>action</th>
            </tr>
            @foreach ($data_produk as $row)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $row->nama_produk}}</td>
                <td>{{ $row->telp_produk}}</td>
                <td>@rupiah($row->harga)</td>
                <td>{{ $row->jumlah_produk}}</td>
                <td>{{ $row->tanggal_produk}}</td>
                <td>{{ $row->keterangan_produk}}</td>
                <td>

                    <form method="post" action="{{route('produk.destroy',[$row->kd_produk])}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <a href="{{route('produk.edit',[$row->kd_produk])}}" class="btn btn-warning">edit</a>
                        <a href="{{route('produk.show',[$row->kd_produk])}}" class="btn btn-info">detail</a>
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection