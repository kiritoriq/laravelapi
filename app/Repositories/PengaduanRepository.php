<?php

namespace App\Repositories;

use App\Models\Pengaduan;

class PengaduanRepository {
    private $model;

    public function __construct(Pengaduan $Pengaduan) {
        $this->model = $Pengaduan;
    }

    public function getAll() {
        return $this->model->all();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

    public function getPengaduanProses() {
        return $this->model->where('sts_pengaduan', 0)->get();
    }

    public function createPengaduan($request) {
        $create = Pengaduan::create($request);
        return ($create)?true:false;
    }
}