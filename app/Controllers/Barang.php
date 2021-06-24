<?php

namespace App\Controllers;

class Barang extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function blog()
	{
		return view('blog');
	}
	public function about()
	{
		return view('about');

}
}