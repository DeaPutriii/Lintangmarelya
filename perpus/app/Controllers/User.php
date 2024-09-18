<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll(); // Perbaiki nama variabel menjadi $model
        return view('user/awal', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'Username'      => $this->request->getVar('Username'),
            'Password'      => password_hash($this->request->getVar('Password'), PASSWORD_DEFAULT),
            'Email'         => $this->request->getVar('Email'),
            'NamaLengkap'   => $this->request->getVar('NamaLengkap'),
            'Alamat'        => $this->request->getVar('Alamat'),
        ];

        $model->insert($data); // Memanggil metode insert pada UserModel
        return redirect()->to('/user');
    }

    public function edit($UserID)
    {
        $model = new UserModel();
        $data['user'] = $model->find($UserID);
        return view('user/edit', $data); 
    }

    public function update()
    {
        $model = new UserModel();

        $UserID = $this->request->getVar('UserID');
        $data = [
            'Username'      => $this->request->getVar('Username'),
            'Password'      => password_hash($this->request->getVar('Password'), PASSWORD_DEFAULT),
            'Email'         => $this->request->getVar('Email'),
            'NamaLengkap'   => $this->request->getVar('NamaLengkap'),
            'Alamat'        => $this->request->getVar('Alamat'),
        ];

        $model->update($UserID, $data); // Update user data based on ID
        return redirect()->to('/user');
    }

    public function delete($UserID)
    {
        $model = new UserModel();
    
        if ($model->delete($UserID)) {
            return redirect()->to('/user')->with('message', 'User deleted successfully');
        } else {
            return redirect()->to('/user')->with('error', 'Failed to delete user');
        }
    }

} 
