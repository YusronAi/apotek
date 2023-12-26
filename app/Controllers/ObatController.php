<?php

namespace App\Controllers;

use App\Models\obatModel;

class ObatController extends BaseController
{
    protected $obatModel;

    public function __construct()
    {
        $this->obatModel = new obatModel();
    }
    public function obat()
    {
        $obat = $this->obatModel->AllObat();
        $data = [
            'title' => "Data Obat",
            'obat' => $obat
        ];

        return view('obat/dataobat', $data);
    }


    public function delete($id)
    {
        $this->obatModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/data-obat');
    }

    public function input()
    {
        $data = [
            'title' => 'Input Obat'
        ];

        return view('obat/inputobat', $data);
    }

    public function save()
    {
        $this->obatModel->save([
            'nama_obat' => $this->request->getVar('nama_obat'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambah');
        return redirect()->to('/data-obat');
    }

    public function edit($id)
    {
        $obat = $this->obatModel->cari($id);
        $data = [
            'title' => 'Edit Obat',
            'obat' => $obat
        ];

        return view('obat/editobat', $data);
    }

    public function update ($id) {
        $this->obatModel->save([
            'id_obat' => $id,
            'nama_obat' => $this->request->getVar('nama_obat'),
            'stok' => $this->request->getVar('stok'),
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/data-obat');
    }
}
