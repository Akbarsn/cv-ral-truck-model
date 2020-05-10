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
    <main id="login">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="center">
                                <img src="{{asset('img/logo.jpg')}}" id="logo">
                            </div>
                            <h5 class="heading text-center">
                                Sistem Informasi Rekrutmen<br>CV RAL TRUCK MODEL
                            </h5>
                            <h1 class="heading text-center">
                                Beri Nilai Tes TKPBA
                            </h1>
                            <br>
                            @include('inc.message')
                            <div class="row justify-content-around">
                                <div class="col-8 text-center">
                                    <form method="POST" action="{{url('/status/tkpba')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-center">
                                                    <h5>Soal</h5>
                                                </div>
                                                <a href="{{url('')}}/soal/{{$soal->data_soal}}"
                                                    class="btn btn-info">Lihat</a>
                                            </div>
                                            <div class="col">
                                                <div class="text-center">
                                                    <h5>Kunci Jawaban</h5>
                                                </div>
                                                <a href="{{url('')}}/soal/{{$soal->jawaban_soal}}"
                                                    class="btn btn-info">Lihat</a>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <h5>Jawaban Peserta</h5>
                                            <a href="{{url('')}}/jawaban/{{$jawaban->jawaban_soal}}"
                                                class="btn btn-info">Lihat</a>
                                        </div>
                                        <input type="hidden" name="ID_calon" value="{{$jawaban->ID_calon}}">
                                        <input type="hidden" name="ID_konfirmasi" value="{{$jawaban->ID_konfirmasi}}">
                                        <div class="form-group">
                                            <label for="nilai">Nilai Tes</label>
                                            <input type="number" class="form-control" id="nilai" name="nilai">
                                        </div>
                                        <br>
                                        <div class="center">
                                            <input type="submit" class="btn btn-primary" value="Kirim">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
