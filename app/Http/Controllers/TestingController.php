<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function halo($nama = "wahyu")
    {
        return 'hallo selamat datang '.$nama;
    }
}
