<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pengaduan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="text-center">
        <h5>PELMAS</h5>
        <h4>Laporan Masyarakat</h4>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>ISI LAPORAN</th>
                    <th>TANGGAPAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->tgl_pengaduan}}</td>
                        <td>{{ $v->isi_laporan }}</td>
                        <td>{{ $v->tanggapan->tanggapan }}</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>