@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        {{-- <i class="bi-person-circle fs-1"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                        <h4>Create Barang</h4>
                    </div>
                    <hr>
                    <div class="table">
                        <div class="col-md-12 mb-3">
                            <label for="KodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text"
                                name="KodeBarang" id="KodeBarang" value="{{ old('KodeBarang') }}"
                                placeholder="Enter KodeBarang">
                            @error('KodeBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="NamaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text"
                                name="NamaBarang" id="NamaBarang" value="{{ old('NamaBarang') }}"
                                placeholder="Enter Nama Barang">
                            @error('NamaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="DeskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="text"
                                name="DeskripsiBarang" id="DeskripsiBarang" value="{{ old('DeskripsiBarang') }}"
                                placeholder="Enter Deskripsi Barang">
                            @error('DeskripsiBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="HargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('HargaBarang') is-invalid @enderror" type="text"
                                name="HargaBarang" id="HargaBarang" value="{{ old('HargaBarang') }}"
                                placeholder="Enter Harga Barang">
                            @error('HargaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="SatuanBarang" class="form-label">Satuan Barang</label>
                            <select name="satuan_id" id="satuan_id" class="form-select">
                                <option value="">-- Pilih satuan barang --</option>
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}">
                                        {{ old('satuan') == $satuan->id ? 'selected' : '' }}
                                        {{ $satuan->kode_satuan . ' - ' . $satuan->nama_satuan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
