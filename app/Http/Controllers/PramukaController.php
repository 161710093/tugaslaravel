<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pramuka;
class PramukaController extends Controller
{
    //

     public function index2()
{ 
	$pramuka = Pramuka::all();
	return view('tabel',compact('pramuka'));
}
}
