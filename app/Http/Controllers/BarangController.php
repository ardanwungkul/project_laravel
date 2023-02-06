<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BarangController extends Controller
{
    public function index()
    {
        $dataBarang = Barang::all();
        return view('master.barang.index', compact('dataBarang'));
    }



    public function create()
    {
        return view('master.barang.create');
    }

    public function store(Request $request)
    {
        $config = [
            'table' => 'barangs',
            'length' => 6,
            'prefix' => date('m'),
            'field' => 'no'
        ];

        // now use it
        $id = IdGenerator::generate($config);

        $request->validate(
            [
                // 'no' => 'required',
                'nama_barang' => 'required|min:5',
                'harga_sewa' => 'required|min:4',
                'stok' => 'required',
            ]
        );

        $barang = new Barang();
        $barang->no = $id;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_sewa = $request->harga_sewa;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect()->route('barang.index')->with(['success' => 'Barang berhasil ditambahkan']);
    }

    public function edit(Barang $barang)
    {
        return view('master.barang.edit', compact('barang'));
    }

    public function show()
    {
        return view('master.barang.show');
    }


    public function update(Request $request, Barang $barang)
    {
        $request->validate(
            [
                'nama_barang' => 'required',
                'harga_sewa' => 'required',
                'stok' => 'required',
            ]
        );

        $barang->fill($request->post())->save();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate');
    }
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
