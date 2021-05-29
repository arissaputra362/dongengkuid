<?php

namespace App\Models;

use CodeIgniter\Model;
use Prophecy\Promise\ReturnPromise;

class MateriModel extends Model
{
    protected $table = 'materi';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'keterangan'];

    public function getMateri($slug = false){
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}