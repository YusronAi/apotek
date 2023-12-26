<?php

namespace App\Models;

use CodeIgniter\Model;

class pelangganModel extends Model
{
    protected $table      = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $allowedFields = ['nama_pelanggan', 'umur', 'alamat', 'jk'];

    public function All()
    {
        return $this->db->table('pelanggan')->get()->getResultArray();
    }

    public function cari ($id)
    {
        return $this->table('pelanggan')->where('id_pelanggan', $id);
    }
}
