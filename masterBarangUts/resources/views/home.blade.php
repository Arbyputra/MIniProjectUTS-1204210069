@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    {{-- @include('layouts.nav') --}}
    @yield('content')
    @vite('resources/js/app.js')

    <div class="container">
        <h1 class="mt-4">Biodata Pribadi</h1>
        <hr>

        <div class="row">
          <div class="col-md-4">
            <img class="img-fluid" src="{{ Vite::asset('resources/images/arbypantai.jpg') }}">
          </div>
          <div class="col-md-8">
            <h2>Nama: Haqiqi Pamungkas Arby Putra</h2>
            <p>Umur: 20 tahun</p>
            <p>Pekerjaan: Mahasiswa</p>
            <p>Alamat: Jl. Tropodo 1 perumahan Surya Citra Residence</p>
            <p>Email: arbyputra34@.com</p>
            <p>Telepon: 082244507470</p>
          </div>
        </div>

        <h3 class="mt-4">Pendidikan</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Tingkat</th>
              <th>Instansi</th>
              <th>Tahun</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>SMA</td>
              <td>SMA Negri 1 Waru</td>
              <td>2019-2021</td>
            </tr>
            <tr>
              <td>S1</td>
              <td>Institut Teknologi Telkom Surabaya</td>
              <td>On Going</td>
            </tr>
          </tbody>
        </table>

        <h3 class="mt-4">Kemampuan</h3>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>Bootstrap</li>
        </ul>

        <h3 class="mt-4">Pengalaman Kerja</h3>
        <ul>
          <li> - </li>
        </ul>
      </div>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
    {{-- @include('default') --}}
@endsection
