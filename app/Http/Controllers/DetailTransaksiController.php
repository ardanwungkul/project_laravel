<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        return view('master.detailtransaksi.index');
    }

    public function save()
    {
    }

    public function create()
    {
        return view('master.detailtransaksi.create');
    }

    public function edit()
    {
        return view('master.detailtransaksi.edit');
    }

    public function show()
    {
        return view('master.detailtransaksi.show');
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
