@extends('layouts.layout')
@section('content')

<div class="card bg-dark text-white col-5 p-3 mt-3 mx-auto">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h3>Form Register</h3>
                </div>
            </div>
        </div>
    </div>

        <div class="container mt-3 border border p-3">
        <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
                
            @csrf
                <div class="row mb-3">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_telepon" class="col-sm-3 col-form-label">No Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_identitas" class="col-sm-3 col-form-label">No Identitas</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="no_identitas" name="no_identitas" placeholder="No Identitas">
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