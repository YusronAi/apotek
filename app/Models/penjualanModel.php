<?php

namespace App\Models;

use CodeIgniter\Model;

class penjualanModel extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $allowedFields = ['id_pelanggan', 'id_transaksi', 'tgl_transaksi', 'total_transaksi', 'total_bayar'];

    public function All()
    {
        return $this->db->table('penjualan')->get()->getResultArray();
    }

    public function getDetail ($id) {
        $this->join('penjualan_detail', 'penjualan_detail.id_pelanggan = penjualan.id_pelanggan', 'LEFT');
        $this->select('penjualan_detail.*');
        $this->select('penjualan.*');
        $this->orderBy('penjualan.id_penjualan');
        $result = $this->where('id_pelanggan', $id)->findAll();

        // echo $this->db->getLastQuery();

        return $result;
    }

    public function GetPelanggan ()
    {
        return $this->db->table('pelanggan')->get()->getResultArray();
    }

    public function cari ($id)
    {
        return $this->table('penjualan')->like('id_pelanggan', $id)->first();
    }
}
