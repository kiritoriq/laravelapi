<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PengirimanService;

class PengirimanController extends Controller
{
    private $service;

    public function __construct(PengirimanService $pengirimanService) {
        $this->middleware('auth:api');
        $this->service = $pengirimanService;
    }

    public function getPengiriman(Request $request) {
        $id = (isset($request))?$request->id:'';
        if($id != "") {
            $data = $this->service->getById($id);
        } else {
            $data = $this->service->getAll();
        }
        return response()->json((!empty($data))?$data->toArray():$data, 200);
    }

    public function getUserkirim(Request $request) {
        $data = $this->service->getUserkirim();
        return response()->json($data->toArray(), 200);
    }
}
