<?php

namespace App\Controllers;

class JudulCerita extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Cerita | dongengku.id'
		];
		return view('pages/admin/cerita/list_judul', $data);
	}
}