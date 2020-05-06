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
                <h4 class="subheading">Selamat datang {{session('name')}}</h4>
            </div>
        </section>

        <section id="content">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_soal">
                Tambah Soal
            </button>
            <div class="modal fade" id="tambah_soal" tabindex="-1" role="dialog" aria-labelledby="tambah"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambah">Tambah Soal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('/tambah-soal')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="soal">Upload Soal</label>
                                    <input type="file" class="form-control-file" id="soal" name="soal">
                                </div>
                                <div class="form-group">
                                    <label for="kunci">Upload Kunci Jawaban</label>
                                    <input type="file" class="form-control-file" id="kunci" name="kunci">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Tambah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                        <td>@if ($r->status_tkpba == "Selesai")
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#cek{{$r->ID_calon}}">Cek Jawaban</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Cek Jawaban</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{url('')}}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <h3 class="heading">Soal</h3>
                                                <h3 class="heading">Jawaban</h3>
                                                <h3 class="heading">Kunci Jawaban</h3>

                                                <div class="form-group">
                                                    <label for="nilai">Nilai</label>
                                                    <input type="number" class="form-control" id="nilai">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" value="Beri Nilai">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @else
                            {{$r->status_tkpba}}
                            @endif
                        </td>
                        <td>{{$r->status_psikologi}}</td>
                        <td>{{$r->interview}}</td>
                        <td>{{$r->status_calon}}</td>
                        <td><button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#modal{{$r->ID_calon}}">Rubah</button></td>
                    </tr>
                    <div class="modal fade" id="modal{{$r->ID_calon}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Rubah Status</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{url('/ubah-status')}}" method="POST">
                                    <input type="hidden" name="id" value="{{$r->ID_calon}}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="administrasi">Status Administrasi</label>
                                            <select class="form-control" id="administrasi" name="administrasi">
                                                <option value="Tunggu">Tunggu</option>
                                                <option value="Lulus">Lulus</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tkpba">Status TKPBA</label>
                                            <select class="form-control" id="tkpba" name="tkpba">
                                                <option value="Tunggu">Tunggu</option>
                                                <option value="Ambil">Ambil</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="soal">Soal untuk Tes TKPBA</label>
                                            <select class="form-control" id="tkpba" name="soal">
                                                @foreach ($soal as $s)
                                                <option value="{{$s->ID_soal}}">{{explode(".",$s->data_soal)[0]}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="psikologi">Status Psikologi</label>
                                            <select class="form-control" id="psikologi" name="psikologi">
                                                <option value="Tunggu">Tunggu</option>
                                                <option value="Lulus">Lulus</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="interview">Interview</label>
                                            <select class="form-control" id="interview" name="interview">
                                                <option value="Tunggu">Tunggu</option>
                                                <option value="Ambil">Ambil</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" value="Rubah">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </section>

    </div>
</main>
@endsection
