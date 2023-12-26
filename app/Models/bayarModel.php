<?php

namespace App\Models;

use CodeIgniter\Model;

class bayarModel extends Model
{
    protected $table = 'bayar';
    protected $primaryKey = 'id_bayar';
    protected $allowedFields = ['id_pelanggan', 'total_bayar', 'kembalian'];

    public function AllBayar()
    {
        return $this->db->table('bayar')->get()->getResultArray();
    }

    public function cari ($id)
    {
        return $this->table('bayar')->where('id_pelanggan', $id)->first();
    }
}
