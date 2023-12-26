<?php

namespace App\Models;

use CodeIgniter\Model;

class penjualanDetailModel extends Model
{
    protected $table      = 'penjualan_detail';
    protected $primaryKey = 'id_penjualan_detail';
    protected $allowedFields = ['id_pelanggan', 'id_obat', 'jumlah_obat'];

    public function All()
    {
        return $this->db->table('penjualan_detail')->get()->getResultArray();
    }

    public function getPelanggan()
    {
        return $this->db->table('pelanggan')->join('pelanggan', 'pelanggan.id_pelanggan=penjualan_detail.id_pelanggan')->get()->getResultArray();
    }

    public function getObat()
    {
        return $this->db->table('obat')->get()->getResultArray();
    }

    public function getDaftar($id)
    {
        return $this->table('penjualan_detail')->where('id_pelanggan', $id)->findAll();
    }

    public function getDetail($id)
    {
        $this->join('penjualan_detail', 'penjualan_detail.id_pelanggan = penjualan.id_pelanggan', 'LEFT');
        $this->select('penjualan_detail.*');
        $this->select('penjualan.*');
        $this->orderBy('penjualan.id_penjualan');
        $result = $this->like('id_penjualan', $id);

        // echo $this->db->getLastQuery();

        return $result;
    }

    public function getJumlah($id)
    {
        return $this->table('penjualan_detail')->where('id_pelanggan', $id)->countAllResult();
    }
}
