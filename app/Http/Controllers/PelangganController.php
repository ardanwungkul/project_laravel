<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function index()
    {
        $dataPelanggan = Pelanggan::all();
        return view('master.pelanggan.index', compact('dataPelanggan'));
    }

    public function register()
    {
        return view('master.pelanggan.create');
    }

    public function store(Request $request)
    {
        $config = [
            'table' => 'pelanggans',
            'length' => 6,
            'prefix' => 'USR',
            'field' => 'no'
        ];

        // now use it
        $id = IdGenerator::generate($config);

        $request->validate(
            [
                // 'no' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'no_identitas' => 'required',
                'no_telepon' => 'required',
            ]
        );

        $pelanggan = new Pelanggan();
        $pelanggan->no = $id;
        $pelanggan->no_user = Auth::id();
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_identitas = $request->no_identitas;
        $pelanggan->no_telepon = $request->no_telepon;
        $pelanggan->save();
        $setStatus = User::find(Auth::id());
        $setStatus->status = true;
        $setStatus->save();

        return redirect()->route('welcome')->with(['success' => 'Pelanggan berhasil ditambahkan']);
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('master.pelanggan.edit', compact('pelanggan'));
    }

    public function show()
    {
        return view('master.pelanggan.show');
    }


    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate(
            [
                // 'no' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'no_identitas' => 'required',
                'no_telepon' => 'required',
            ]
        );

        $pelanggan->fill($request->post())->save();

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil diupdate');
    }
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
