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
            <a class="btn btn-primary" href="{{url('/cetak-laporan')}}">Cetak Laporan</a>

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
                        <th scope="col" colspan="2" class="text-center">Aksi</th>
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
                        <td><a class="btn btn-primary" href="{{url('/karyawan/terima')}}/{{$r->ID_calon}}">Terima</a></td>
                        <td><button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#detail{{$r->ID_calon}}">Lihat Detail</button></td>
                    </tr>

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
                    @endforeach
                </tbody>
            </table>
        </section>

    </div>
</main>
@endsection
