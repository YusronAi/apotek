<?php

namespace App\Controllers;

use App\Models\pelangganModel;

class PelangganController extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        $this->pelangganModel = new pelangganModel();
    }
    public function pelanggan()
    {
        $pelanggan = $this->pelangganModel->All();
        $data = [
            'title' => "Data Pelanggan",
            'pelanggan' => $pelanggan
        ];

        return view('pelanggan/datapelanggan', $data);
    }

    public function input () {
        $data = [
            'title' => 'Input Pelanggan'
        ];

        return view('pelanggan/inputpelanggan', $data);
    }


    public function delete($id)
    {
        $this->pelangganModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/data-pelanggan');
    }

    public function save()
    {
        $this->pelangganModel->save([
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'umur' => $this->request->getVar('umur'),
            'alamat' => $this->request->getVar('alamat'),
            'jk' => $this->request->getVar('jk')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambah');
        return redirect()->to('/data-pelanggan');
    }

    public function edit($id)
    {
        $pelanggan = $this->pelangganModel->cari($id);
        $data = [
            'title' => 'Edit Pelanggan',
            'pelanggan' => $pelanggan
        ];
    
        return view('pelanggan/editpelanggan', $data);
    }

    public function update ($id) {
        $this->pelangganModel->save([
            'id_pelanggan' => $id,
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'umur' => $this->request->getVar('umur'),
            'alamat' => $this->request->getVar('alamat'),
            'jk' => $this->request->getVar('jk')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/data-pelanggan');
    }
}
