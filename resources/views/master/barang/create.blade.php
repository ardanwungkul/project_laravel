@extends('layouts.layout')
@section('content')

<div class="card bg-dark text-white col-11 p-3 mt-3 mx-auto">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Tambah Barang</h3>
                </div>
            </div>
        </div>
    </div>

        <div class="container mt-3 border border p-3">
        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf    

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Nama Barang">
                        @error('nama_barang')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Harga Sewa</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga_sewa" class="form-control" id="harga_barang" placeholder="Harga Sewa">
                        @error('harga_sewa')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number"  name="stok" class="form-control" id="stok" placeholder="Stok">
                        @error('stok')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
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