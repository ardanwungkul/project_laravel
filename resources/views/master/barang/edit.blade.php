@extends('layouts.layout')
@section('content')

<div class="card bg-dark text-white col-11 p-3 mt-3 mx-auto">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Edit Barang</h3>
                </div>
            </div>
        </div>
    </div>

        <div class="container mt-3 border border p-3">
        <form action="{{ route('barang.update', $barang->no) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="row mb-3">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang}}" placeholder="Nama Barang">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga_sewa" class="col-sm-2 col-form-label">Harga Sewa</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga_sewa" id="harga_sewa" value="{{ $barang->harga_sewa}}" placeholder="Harga Sewa">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="stok" id="stok" placeholder="Stok" value="{{ $barang->stok}}">
                    </div>
                </div>
                
                    <div class="d-flex justify-content-end gap-3">
                        <a class="btn btn-danger" href="javascript:history.back()" enctype="multipart/form-data">Cancel</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
        </form>
        </div>
    </div>
</div>

@endsection