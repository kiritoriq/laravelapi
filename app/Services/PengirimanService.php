<?php

namespace App\Services;

use App\Repositories\PengirimanRepository;

class PengirimanService {
    private $repo;

    public function __construct(PengirimanRepository $pengirimanrepo) {
        $this->repo = $pengirimanrepo;
    }

    public function getAll() {
        return $this->repo->getAll();
    }

    public function getById($id) {
        return $this->repo->getById($id);
    }

    public function getUserkirim() {
        return $this->repo->getUserkirim();
    }
}