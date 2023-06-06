@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #daaf37;">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-10 h1"> Arbyputra </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="btn-group">
            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Project UTS
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home') active @endif">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}" class="nav-link @if($currentRouteName == 'barangs.index') active @endif">List Barang</a></li>
            </ul>
          </div>
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home') active @endif">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}" class="nav-link @if($currentRouteName == 'barangs.index') active @endif">Employee</a></li>
            </ul>

            <hr class="d-md-none text-dark-50">
        </div> --}}
    </div>
</nav>
