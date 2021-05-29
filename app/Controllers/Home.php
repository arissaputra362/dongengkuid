<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Dongengku.id'
		];
		return view('pages/admin/home');
	}
}