@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
<main id="admin">
    @include('inc.message')
    <section id="banner">
        <div class="text-center">
            <h1 class="heading">Dashboard</h1>
            <br>
            <h4 class="subheading">Selamat datang {{session('name')}}</h4>
        </div>
    </section>

    <section id="content">
        @if (!empty($terima))
        <div class="text-center" id="pengumuman">
            <h2 class="heading">Selamat anda diterima di posisi {{$terima->posisi_lamaran}}</h2>
        </div>
        @endif
        <div class="d-flex flex-wrap justify-content-around">
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="heading">Status Administrasi</h2>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="subheading">{{$rekap->status_administrasi}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="heading">Status TKPBA</h2>
                    </div>
                    <div class="card-body text-center">
                        @if ($rekap->status_tkpba=="Ambil")
                        <a href="{{url('/ambil-test')}}/{{$rekap->ID_calon}}" class="btn btn-primary">Ambil Tes</a>
                        @else
                        <h3 class="subheading">{{$rekap->status_tkpba}}</h3>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="heading">Status Psikologi</h2>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="subheading">{{$rekap->status_psikologi}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="heading">Interview</h2>
                    </div>
                    <div class="card-body text-center">
                        <br>
                        <h3 class="subheading">{{$rekap->interview}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
