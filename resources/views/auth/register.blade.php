<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Rekrutmen</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Source+Sans+Pro&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
</head>

<body>
    <main id="register">
        <div class="container">
            <div class="text-center">
                <h1 class="heading">
                    Register
                </h1>
            </div>
            <br>
            @include('inc.message')
            <form method="POST" action="{{url('/register/send')}}">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="notelepon">No Telepon</label>
                            <input type="text" class="form-control" id="notelepon" name="no_telepon">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallahir" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="noktp">No KTP</label>
                            <input type="number" class="form-control" id="noktp" name="no_ktp">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jenis_kelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan_terakhir">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi Lamaran</label>
                            <input type="text" class="form-control" id="posisi" name="posisi_lamaran">
                        </div>
                        <div class="form-group">
                            <label for="pengalaman">Pengalaman Kerja</label>
                            <input type="number" class="form-control" id="pengalaman" name="pengalaman_kerja">
                        </div>
                    </div>
                </div>
                <br>
                <div class="center">
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </form>
        </div>
    </main>
</body>

</html>
