<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PengaduanService;

class PengaduanController extends Controller
{
    private $service;

    public function __construct(PengaduanService $pengaduanService) {
        $this->middleware('auth:api');
        $this->service = $pengaduanService;
    }

    public function getPengaduan(Request $request) {
        $id = (isset($request))?$request->id:'';
        if($id != "") {
            $data = $this->service->getById($id);
        } else {
            $data = $this->service->getAll();
        }
        return response()->json((!empty($data))?$data->toArray():$data, 200);
    }

    public function createPengaduan(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'isilaporan' => 'required',
            'jenis_laporan' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->error()->toJson(), 400);
        } else {
            $request['created_at'] = date('d-m-Y H:i:s');
            $request['updated_at'] = date('d-m-Y H:i:s');
            $pengaduan = $this->service->createPengaduan($request);
            $response = ['message' => ($pengaduan)?'Berhasil disimpan':'Gagal Disimpan'];
            return response()->json($response->toArray(), ($pengaduan)?200:500);
        }
    }
}
