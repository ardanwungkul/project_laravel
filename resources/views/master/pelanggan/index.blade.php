@extends('layouts.layout')
@section('content')

<div class="container mx-auto my-3 p-0 rounded">
    <div class=" p-3 bg-secondary d-flex justify-content-between w-100 rounded-top">
        <h3 class="text-white">Manage <b>User</h3>    
        <a class="btn btn-success " href="/pelanggan/create" > Add User</a>
    </div>

    <div class="table table-striped table-responsive">
        <table class="table text-center table-dark table-striped">
            <thead>
                <tr>
                    <th >ID</th>
                    <th>Nama </th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($dataPelanggan as $pelanggan)
                <tr>
                    <td>{{$pelanggan->no}}</td>
                    <td>{{$pelanggan->nama}}</td>
                    <td>{{$pelanggan->no_telepon}}</td>
                    <td>

                        <form action="{{route('pelanggan.destroy', $pelanggan->no ) }}" method="POST">
                            <a class="btn btn-success" href="/pelanggan/show">Show</a>
                            <a class="btn btn-primary" href="{{route('pelanggan.edit', $pelanggan->no ) }}">Edit</a>
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                
            </tbody>
        </table>
            
    </div>
</div>
@endsection