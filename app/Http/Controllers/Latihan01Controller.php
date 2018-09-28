<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Latihan01Controller extends Controller
{
    
	public function index()
	{
		$title		= 'Ini halaman home.';
		$content	= 'Saat ini kita berada di halaman rumah';

		return view('latihan01.index', compact('title', 'content'));
	}

	public function getPage()
	{
		$title		= 'Ini halaman hmtl.';
		$content	= 'Saat ini kita berada di halaman rumah tetangga';

		return view('latihan01.index2', compact('title', 'content'));
	}

	public function coba()
	{
		$title		= 'Ini halaman hmtl.';
		$content	= 'Saat ini kita berada di halaman rumah tetangga';

		return view('latihan01.latihan01', compact('title', 'content'));
	}

	public function printText()
	{
		return ('printed!');
	}

}
