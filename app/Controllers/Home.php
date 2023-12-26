<?php

namespace App\Controllers;

use App\Models\pelangganModel;
use App\Models\obatModel;
use App\Models\penjualanDetailModel;
use App\Models\penjualanModel;
use App\Models\bayarModel;

class Home extends BaseController
{
    protected $pelangganModel;
    protected $obatModel;
    protected $penjualanDetailModel;
    protected $penjualanModel;
    protected $bayarModel;

    public function __construct()
    {
        $this->pelangganModel = new pelangganModel();
        $this->obatModel = new obatModel();
        $this->penjualanDetailModel = new penjualanDetailModel();
        $this->penjualanModel = new penjualanModel();
        $this->bayarModel = new bayarModel();
    }
    public function index()
    {
        return view('dashboard/index');
    }

    public function charts()
    {
        return view('dashboard/charts');
    }

    public function tables()
    {
        return view('dashboard/tables');
    }

    public function forfor()
    {
        return view('errors/404');
    }

    public function blank()
    {
        return view('errors/blank');
    }

    public function dashboard()
    {
        $obat = $this->obatModel->AllObat();
        $pelanggan = $this->pelangganModel->All();
        $jumlahPelanggan = $this->pelangganModel->jumlah();
        $jumlahObat = $this->obatModel->jumlah();
        $jumlahPenjualan = $this->penjualanModel->jumlah();
        $data = [
            'title' => "Dashboard",
            'obat' => $obat,
            'pelanggan' => $pelanggan,
            'jumlahpelanggan' => $jumlahPelanggan,
            'jumlahobat' => $jumlahObat,
            'jumlahpenjualan' => $jumlahPenjualan
        ];

        return view('dashboard/dashboard', $data);
    }

    public function dashboardId()
    {
        if (session()->getFlashdata('ip')) {
            $ip = session()->getFlashdata('ip');
            $harga = session()->getFlashdata('harga-obat');
            $daftar = $this->penjualanDetailModel->getDaftar($ip);
        } else {
            return redirect()->to('/');
        }
        $obat = $this->obatModel->AllObat();
        $pelanggan = $this->pelangganModel->All();
        $data = [
            'title' => "Dashboard",
            'obat' => $obat,
            'pelanggan' => $pelanggan,
            'daftar' => $daftar,
            'harga' => $harga
        ];

        return view('dashboard/dashboardid', $data);
    }

    public function saveDetail()
    {
        $this->penjualanDetailModel->save([
            'id_pelanggan' => $this->request->getVar('id_pelanggan'),
            'id_obat' => $this->request->getVar('id_obat'),
            'jumlah_obat' => $this->request->getVar('jumlah_obat')
        ]);

        $ip = $this->request->getVar('id_pelanggan');
        $io = $this->request->getVar('id_obat');
        $jo = $this->request->getVar('jumlah_obat');

        $obat = $this->obatModel->cari($io);
        $harga = $obat['harga'];
        $hargaObat = $harga * $jo;
        $this->obatModel->update($io, ['stok' => $obat['stok'] - $jo]);

        $bayar = $this->bayarModel->cari($ip);
        if ($bayar) {
            $this->bayarModel->whereIn('id_pelanggan', [$ip])->set(['total_bayar' => $bayar['total_bayar'] + $harga])->update();
        } else {
            $this->bayarModel->insert([
                'id_pelanggan' => $ip,
                'total_bayar' => $hargaObat,
                'kembalian' => 0
            ]);
        }


        session()->setFlashdata([
            'ip' => $ip,
            'io' => $io,
            'jo' => $jo,
            'harga-obat' => $hargaObat
        ]);
        return redirect()->to('/dashboardid');
    }

    public function inputTransaksi($id)
    {
        $pelanggan = $this->pelangganModel->All();
        $bayar = $this->bayarModel->cari($id);
        $totalTransaksi = $bayar['total_bayar'];
        $data = [
            'title' => 'Input Transaksi',
            'pelanggan' => $pelanggan,
            'totaltransaksi' => $totalTransaksi,
            'id' => $id
        ];

        return view('penjualan/inputransaksi', $data);
    }

    public function saveTransaksi()
    {
        $this->penjualanModel->save([
            'id_pelanggan' => $this->request->getVar('id_pelanggan'),
            'tgl_transaksi' => $this->request->getVar('tgl_transaksi'),
            'total_transaksi' => $this->request->getVar('total_transaksi'),
            'total_bayar' => $this->request->getVar('total_bayar'),
        ]);


        $ip = $this->request->getVar('id_pelanggan');
        $totalTransaksi = $this->request->getVar('total_transaksi');
        $total_bayar = $this->request->getVar('total_bayar');
        $kembalian = $total_bayar - $totalTransaksi;

        $this->bayarModel->whereIn('id_pelanggan', [$ip])->set(['kembalian' => $kembalian])->update();

        session()->setFlashdata('pesan', 'Transaksi Berhasil');

        return redirect()->to('/data-penjualan');
    }
}
