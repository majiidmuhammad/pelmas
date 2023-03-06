@extends('layouts.admin')

@section('css')
<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
@endsection

@section('header', 'Data Petugas')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ route('petugas.create') }}" class="btn btn-purple">Tambah</a>
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Projects table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0" id="petugasTable">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Petugas    </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Username</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Telp</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Level</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $petugas as $k => $v )
                                <tr class="text-sm font-weight-bold mb-0 text-center">
                                    <td>{{$k += 1}}</td>
                                    <td>{{$v->nama_petugas}}</td>
                                    <td>{{$v->username}}</td>
                                    <td>{{$v->telp}}</td>
                                    <td>{{$v->level}}</td>
                                    <td><a href="{{ route('petugas.edit', $v->id) }}" style="text-decoration: underline">Lihat</a></td>
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