@extends('layouts.app')
@include('barangs.create')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Barang</h2>
            </div>
            <div class="pull-right">
            @if (Auth::user()->type == "admin")
                <!-- <a class="btn btn-success" href="{{ route('barangs.create') }}"> Create New barang</a> -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Tambah Barang</button>
            @endif
            </div>
        </div>
    </div>

    <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $barang)
        @include('barangs.edit', ['barang' => $barang])
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->stok }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $barang->id }}">Edit</button>
                    <!-- <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a> -->

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $barangs->links() !!}

@endsection