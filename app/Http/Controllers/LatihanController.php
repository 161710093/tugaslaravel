<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class LatihanController extends Controller
{
    //
    public function index1()
{
	return view('galeri');
}

public function index3()
{
	return view('paragraf');
}
public function index4()
{
	return view('dunia');
}
public function index5()
{
	return view('indonesia');
}
}
