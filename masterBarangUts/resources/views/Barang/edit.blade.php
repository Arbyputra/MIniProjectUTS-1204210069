@extends('layouts.app')
@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('barangs.update', $Barang->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6">
                <div class="mb-3 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                        <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg>
                    <h4>Edit Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="KodeBarang" class="form-label">Kode Barang</label>
                        <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text"
                            name="KodeBarang" id="KodeBarang" value="{{ $errors->any() ? old('KodeBarang') : $Barang->kode_barang }}"
                            placeholder="Enter KodeBarang">
                        @error('KodeBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="NamaBarang" class="form-label">Nama Barang</label>
                        <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text" name="NamaBarang" id="NamaBarang" value="{{ $errors->any() ? old('NamaBarang') : $Barang->nama_barang }}" placeholder="Enter ">
                        @error('NamaBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="DeskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="text" name="DeskripsiBarang" id="DeskripsiBarang" value="{{ $errors->any() ? old('DeskripsiBarang') : $Barang->deskripsi_barang }}" placeholder="Enter Deskripsi Barang">
                        @error('DeskripsiBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="HargaBarang" class="form-label">Harga Barang</label>
                        <input class="form-control @error('HargaBarang') is-invalid @enderror" type="text" name="HargaBarang" id="HargaBarang" value="{{ $errors->any() ? old('HargaBarang') : $Barang->harga_barang }}" placeholder="Enter Harga Barang">
                        @error('HargaBarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="SatuanBarang" class="form-label">Satuan Barang</label>
                        <select name="satuan_id" id="satuan_id" class="form-select">
                            @php
                                $selected = '';
                                if ($errors->any()) {
                                    $selected = old('satuan_id');
                                } else {
                                    $selected = $Barang->satuan_id;
                                }
                            @endphp
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}"
                                    {{ $selected == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->kode_satuan . ' - ' . $satuan->nama_satuan }}</option>
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
                        <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
