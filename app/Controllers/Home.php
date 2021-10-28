<?php

namespace App\Controllers;

class Home extends BaseController
{
	// public function index()
	// {
	//     return view('landing_page');
	// }

	public function index()
	{
		return view('link_dusun');
	}

	public function maps()
	{
		$data = [
			'title' => 'map',
		];

		return  view('storymap', $data);
	}
}
