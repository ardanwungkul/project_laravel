@extends('layouts.layout')
@section('content')

<div class="card bg-dark text-white col-11 p-3 mt-3 mx-auto">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Edit User</h3>
                </div>
            </div>
        </div>
    </div>

        <div class="container mt-3 border border p-3">
        <form action="" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">ID User</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" id="" placeholder="ID User">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" id="" placeholder="Nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" id="" placeholder="Alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" id="" placeholder="No Telepon">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No Identitas</label>
                    <div class="col-sm-10">
                        <input type="" class="form-control" id="" placeholder="No Identitas">
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