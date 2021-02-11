<?php

namespace App\Services;

use App\Repositories\PengaduanRepository;

class PengaduanService {
    private $repo;

    public function __construct(PengaduanRepository $Pengaduanrepo) {
        $this->repo = $Pengaduanrepo;
    }

    public function getAll() {
        return $this->repo->getAll();
    }

    public function getById($id) {
        return $this->repo->getById($id);
    }

    public function createPengaduan() {
        return $this->repo->createPengaduan();
    }
}