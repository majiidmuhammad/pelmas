@extends('layouts.admin')

@section('title', 'Halaman Laporan')

@section('header', 'Laporan Pengaduan')

@section('content')
<div class="row">
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-body mt-4">
                <form action="{{ route('laporan.getLaporan') }}" method="POST">
                    @csrf
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="card-header mb-5">
                            Cari Berdasarkan Tanggal
                        </div>
                        <div class="form-group">
                            <input type="text" name="from" class="from-control" placeholder="Tanggal Awal"
                                onfocusin="(this.type='date')" onfucusin="(this.type='text')">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" name="to" class="from-control" placeholder="Tanggal Akhir"
                                onfocusin="(this.type='date')" onfucusin="(this.type='text')">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" style="width: 100%">Cari Laporan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="card">
            <div class="car-header mt-5">
                Data Berdasarkan Tanggal
                <div class="float-right mt-5 mb-5">
                    @if($pengaduan ?? '')
                        <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to]) }}" class="btn btn-danger">EXPORT PDF</a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                @if ($pengaduan ?? '' )
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Tanggal</th>
                                <th>Isi Laporan</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $k => $v)
                                <tr>
                                    <td>{{ $k += 1 }}</td>
                                    <td>{{ $v->tgl_pengaduan }}</td>
                                    <td>{{ $v->isi_laporan }}</td>
                                    <td>{{ $v->tanggapan->tanggapan }}</td>
                                    <td>
                                        @if($v->status == '0')
                                            <a href="#" class="flex text-danger"><i data-feather="check-square"
                                                    class="w-4 h-4 mr-2"></i>Pending</a>
                                        @elseif($v->status == 'proses')
                                            <a href="#" class="flex text-warning"><i data-feather="check-square"
                                                    class="w-4 h-4 mr-2"></i>Proses</a>
                                        @else
                                            <a href="#" class="flex text-success"><i data-feather="check-square"
                                                    class="w-4 h-4 mr-2"></i>Selesai</a>
                                        @endif</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-center">
                        Tidak Ada Data
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
