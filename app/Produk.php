<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "kd_produk";
    protected $fillable = ["nama_produk", "telp_produk", "keterangan_produk", "tanggal_produk", "harga", "jumlah_produk"];
    public $timestamps = false;
}
