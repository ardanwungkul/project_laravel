@extends('layouts.layout')
@section('content')

<div class="container mx-auto my-3 p-0 rounded ">
    <div class=" p-3 bg-dark d-flex justify-content-between w-100 rounded-top">
        <h4 class="text-white">Manage <b>Barang</h4>    
        <a class="btn btn-success " href="/barang/create" > Add Barang</a>
    </div>
    @if ($message = Session::get('success'))

   
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p>{{$message}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

@endif
    <div class="table table-responsive table-dark">
        <table class="table text-center table-dark table-striped ">
            <thead>
                <tr>
                    <th >No. Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Sewa</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($dataBarang as $barang)
                <tr  class="fs-6 fw-lighter">
                    <td>{{ $barang->no }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga_sewa }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>
                        <form action="{{route('barang.destroy', $barang->no ) }}" method="POST">
                            <a class="btn w-2 btn-sm btn-primary" href="{{route('barang.edit', $barang->no ) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm  btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
    </div>
</div>
@endsection