<?php

namespace App\Models;

use CodeIgniter\Model;

class obatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'id_obat';
    protected $allowedFields = ['id_obat', 'nama_obat', 'harga', 'stok'];

    public function AllObat()
    {
        return $this->db->table('obat')->get()->getResultArray();
    }

    public function cari ($id)
    {
        return $this->table('obat')->like('id_obat', $id)->first();
    }

    public function getHarga()
    {
        return $this->select('harga')->from('obat')->where('id_obat', 1)->first();
    }
}
