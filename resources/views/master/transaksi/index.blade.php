@extends('layouts.layout')
@section('content')

<div class="container mx-auto my-3  p-0 rounded">
    <div class=" p-3 bg-secondary d-flex justify-content-between w-100 rounded-top">
        <h3 class="text-white">Manage <b>Transactions</b></h3>    
    </div>

    <div class="table table-striped table-responsive">
        <table class="table text-center table-dark ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>TRX001</td>
                    <td>Ardan Yafi Hamam </td>
                    <td>14/01/02</td>
                    <td>14/01/03</td>
                    <td>
                        <form action="" method="Post">
                            <a class="btn btn-success" href="/transaksi/show">Show</a>
                            <a class="btn btn-primary" href="/transaksi/edit">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
            
    </div>
</div>
@endsection