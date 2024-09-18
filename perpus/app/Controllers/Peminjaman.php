<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use CodeIgniter\Controller;

class Peminjaman extends Controller
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();
        return view('peminjaman/index', $data);
    }

    public function create()
    {
        return view('peminjaman/create');
    }

    public function store()
    {
        $model = new PeminjamanModel();
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
        ];
        $model->save($data);
        return redirect()->to('/peminjaman');
    }
 
    public function edit($id)
    { 
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id);
        return view('peminjaman/edit', $data);
    }

    public function update($id)
    {
        $model = new PeminjamanModel();
        $data = [ 
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
        ];
        $model->update($id, $data);
        return redirect()->to('/peminjaman');
    }

    public function delete($id)
    {
        $model = new PeminjamanModel();
        $model->delete($id);
        return redirect()->to('/peminjaman');
    }
}
