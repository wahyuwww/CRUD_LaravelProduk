<?php

use Illuminate\Database\Seeder;
use App\Produk;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk1 = new Produk;
        $produk1->nama_produk = "Grosir Kaos Surabaya";
        $produk1->alamat_produk = "Rungkut";
        $produk1->telp_produk = "08134678765";
        $produk1->save();

        $produk2 = new produk;
        $produk2->nama_produk = "Grosir Tas Surabaya";
        $produk2->alamat_produk = "Gunung Anyar";
        $produk2->telp_produk = "085789098374";
        $produk2->save();
    }
}
