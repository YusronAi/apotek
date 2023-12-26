<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password', 'alamat'];

    public function All()
    {
        return $this->db->table('user')->get()->getResultArray();
    }

    public function cari($value)
    {
        return $this->table('user')->like('username', $value);
    }
}
