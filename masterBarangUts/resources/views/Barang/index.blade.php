@extends('layouts.app')
    @section('content')
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3">{{ $pageTitle }}</h4>
                </div>

                </div>
            </div>
            <hr>
            <div class="table-responsive border border-dark p-3 rounded-3">

        <table class="table table-warning table-hover mb-0 bg-white">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Desktipsi Barang</th>
                    <th>Harga Barang</th>
                    <th>Satuan Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
        @foreach ($Barangs as $barang)
            <tr>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->deskripsi_barang }}</td>
                <td>{{ $barang->harga_barang }}</td>
                <td>{{ $barang->satuan->nama_satuan }}</td>
                <td>@include('Barang.action')</td>
            </tr>
            @endforeach
        </tbody>
        </table>
            </div>
        </div>
        <br>
        {{-- <div class="col-lg-3 col-xl-2"> --}}
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('barangs.create') }}" class="btn btn-dark">Create Barang</a>
            </div>
        @endsection
