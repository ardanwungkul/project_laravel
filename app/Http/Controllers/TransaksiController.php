<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('master.transaksi.index');
    }

    public function save()
    {
    }

    public function create()
    {
        return view('master.transaksi.create');
    }

    public function edit()
    {
        return view('master.transaksi.edit');
    }

    public function show()
    {
        return view('master.transaksi.show');
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
