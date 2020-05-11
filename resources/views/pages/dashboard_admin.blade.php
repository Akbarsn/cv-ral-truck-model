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
            <div class="d-flex">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_soal">
                    Tambah Soal
                </button>
            </div>
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
                        <th scope="col" colspan="3">Aksi</th>
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
                            <a href="{{url('/beri-nilai')}}/{{$r->ID_calon}}">Cek Jawaban</a>
                            @else
                            {{$r->status_tkpba}}
                            @endif
                        </td>
                        <td>{{$r->status_psikologi}}</td>
                        <td>{{$r->interview}}</td>
                        <td>{{$r->status_calon}}</td>
                        <td><button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#modal{{$r->ID_calon}}">Rubah</button></td>
                        <td><button class="btn btn-info" type="button" data-toggle="modal"
                                data-target="#detail{{$r->ID_calon}}">Lihat Detail</button></td>
                        <td><a href="{{url('/karyawan/hapus')}}/{{$r->ID_calon}}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    {{-- Modal Lihat Detail --}}
                    <div class="modal fade" id="detail{{$r->ID_calon}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Nama</h5><br>
                                    <p>{{$r->nama}}</p>
                                    <h5>No Telepon</h5><br>
                                    <p>{{$r->no_telepon}}</p>
                                    <h5>Alamat</h5><br>
                                    <p>{{$r->alamat}}</p>
                                    <h5>No KTP</h5><br>
                                    <p>{{$r->no_ktp}}</p>
                                    <h5>Agama</h5><br>
                                    <p>{{$r->agama}}</p>
                                    <h5>Tanggal Lahir</h5><br>
                                    <p>{{$r->tanggal_lahir}}</p>
                                    <h5>Pendidikan Terakhir</h5><br>
                                    <p>{{$r->pendidikan_terakhir}}</p>
                                    <h5>Pengalaman Kerja</h5><br>
                                    <p>{{$r->pengalaman_kerja}} Thn</p>
                                    <h5>Posisi Lamaran</h5><br>
                                    <p>{{$r->posisi_lamaran}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Rubah Status --}}
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
                                                @if ($r->status_tkpba == "Tunggu")
                                                <option value="Ambil">Ambil</option>
                                                @endif
                                                <option value="Lulus">Lulus</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        @if ($r->status_tkpba == "Tunggu")
                                        <div class="form-group">
                                            <label for="soal">Soal untuk Tes TKPBA</label>
                                            <select class="form-control" id="tkpba" name="soal">
                                                @foreach ($soal as $s)
                                                <option value="{{$s->ID_soal}}">{{explode(".",$s->data_soal)[0]}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
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
                                                <option value="Lulus">Lulus</option>
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
