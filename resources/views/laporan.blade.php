<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV RAL TRUCK MODEL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h2>Laporan Penerimaan Karyawan</h2>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Penerimaan</th>
                <th scope="col">Nama</th>
                <th scope="col">Posisi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0;?>
            @foreach ($data as $d)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$d->ID_penerimaan}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->posisi_lamaran}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
