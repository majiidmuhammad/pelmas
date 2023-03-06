@extends('layouts.admin')

@section('css')
<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
@endsection

@section('header', 'Data Pengaduan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Projects table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0" id="pengaduanTable">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Isi laporan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Status</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $pengaduan as $k => $v )
                                <tr class="text-sm font-weight-bold mb-0 text-center">
                                    <td>{{$k += 1}}</td>
                                    <td>{{$v->tgl_pengaduan}}</td>
                                    <td>{{$v->isi_laporan}}</td>
                                    <td>
                                        @if ($v->status == '0')
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        @elseif($v->status == 'proses')
                                            <a href="#" class="badge badge-warning text-white">Proses</a>
                                        @else
                                            <a href="#" class="badge badge-success">Selesai</a>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('pengaduan.show', $v->id) }}" style="text-decoration: underline">Lihat</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
