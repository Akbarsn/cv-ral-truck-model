@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
<main id="admin">
    <div class="container-fluid">
        @include('inc.message')
        <section id="banner">
            <div class="text-center">
                <h1 class="heading">Dashboard</h1>
                <br>
                <h4 class="subheading">Selamat datang {{$name}}</h4>
            </div>
        </section>

        <section id="content">
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status Administrasi</th>
                        <th scope="col">Status TKPBA</th>
                        <th scope="col">Status Psikologi</th>
                        <th scope="col">Interview</th>
                        <th scope="col">Status Calon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0 ?>
                    @foreach ($rekap as $r)
                    <tr class="text-center">
                        <th scope="row">{{++$no}}</th>
                        <td>{{$r->nama}}</td>
                        <td>{{$r->status_administrasi}}</td>
                        <td>{{$r->status_tkpba}}</td>
                        <td>{{$r->status_psikologi}}</td>
                        <td>{{$r->interview}}</td>
                        <td>{{$r->status_calon}}</td>
                        <td><button class="btn btn-primary">Rubah</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

    </div>
</main>
@endsection
