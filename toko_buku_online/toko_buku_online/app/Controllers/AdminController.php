<?php

namespace App\Controller;

use App\Controller\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminConreoller extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function daftarbuku(){
        return view('admin/daftar-buku');
    }

    public function transaksi(){
        return view('admin/transaksi');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }
}