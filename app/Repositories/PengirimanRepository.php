<?php

namespace App\Repositories;

use App\Models\Pengiriman;

class PengirimanRepository {
    private $model;

    public function __construct(Pengiriman $pengiriman) {
        $this->model = $pengiriman;
    }

    public function getAll() {
        return $this->model->all();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

    public function getPengirimanProses() {
        return $this->model->where('sts_kirim', 0)->get();
    }

    public function getUserkirim() {
        return $this->model->with('pelanggan')->where('kdplg', '=', 'pelanggan.kdplg')->get();
    }
}