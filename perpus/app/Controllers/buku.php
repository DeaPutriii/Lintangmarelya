<?php

namespace App\Controllers;
use App\Models\ModelBuku;

class Buku extends BaseController
{
    //index ini adalah method yang akan dipanggil ke routes
    public function index(): string
    {
        return view('layout/v_buku');
        //panggil folder layout file v_buku
    }

    public function tampil()
    {
        $model= new ModelBuku();
        $data = $model->findAll();
        $hasil= [
            "lin"=>$data
        ];
        return view('buku/views_buku',$hasil);

    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $model = new ModelBuku();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
        ];
        $model->insert($data);
        // print($data["tahun_terbit"]);
        // echo($data["judul"]);
        return redirect()->to('/buku');
    }

    public function edit()
    {
        $model = new ModelBuku();
        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];
        return view('buku/edit', $data);
    }

    public function update($id)
    { 
    $model = new ModelBuku();

    // Data yang diambil dari input form
    $data = [
        'judul' => $this->request->getPost('judul'),
        'penulis' => $this->request->getPost('penulis'),
        'penerbit' => $this->request->getPost('penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
    ];

    // Update data buku berdasarkan id_buku
    $model->update($id, $data);

    // Redirect ke halaman daftar buku setelah update
    return redirect()->to('/buku')->with('success', 'Data buku berhasil diperbarui.');
    }

    // public function delete()
    // {
    //     $model = new ModelBuku();
    //     $model->delete($dea);
    //     return redirect()->to('/buku');
    // }

    public function delete()
    {
        $id = $this->request->getPost('id_buku');
        $model = new ModelBuku();
        $model->delete($id);

        return redirect()->to('/buku');
    }
}
