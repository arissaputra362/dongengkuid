<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Materi extends BaseController
{
	protected $materiModel;
	
	public function __construct()
	{
		$this->materiModel = new MateriModel();
	}

	public function index()
	{
		$data = [
			'title'	 => 'Materi | dongengku.id',
			'materi' => $this->materiModel->getMateri()
		];

		return view('pages/admin/materi/list_materi', $data);
	}


	public function create(){
		$data = [
			'title' => 'Tambah Materi | dongengku.id',
			'validation' => \Config\Services::validation()
		];
		
		return view('pages/admin/materi/create_materi', $data);
	}

	public function save(){
		if(!$this->validate([
			'judul' => [
				'rules'  => 'required|is_unique[materi.judul]',
				'errors' => [
					'required'  => '{field} materi harus diisi.',
					'is_unique' => '{field} materi sudah terdaftar.'
				]
			],
			
			'keterangan' => [
				'rules'  => 'required',
				'errors' => [
					'required'  => '{field} materi harus diisi.'
				]
			]
		])) {
			return redirect()->to('/materi/create')->withInput();
		}

		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->materiModel->save([
			'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'keterangan' => $this->request->getVar('keterangan')
		]);

		return redirect()->to('/materi');
	}

	public function delete($id){
		$komik = $this->komikModel->find($id);
		
		$this->komikModel->delete($id);
		return redirect()->to('/materi');
	}
}