@extends('layouts.admin')

@section('css')
<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
@endsection

@section('header', 'Data Petugas')

@section('content')
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible text-right">
    <a href="{{ route('petugas.create') }}" class="btn btn-success w-24 inline-block mr-1 mb-6 mt-6"><i data-feather="user-plus" class="block mx-auto"></i>Tambah</a>
    <table class="table table-report -mt-2" id="pengaduanTable">
        <thead>
            <tr>
                <th class="text-center whitespace-nowrap">NO</th>
                <th class="text-center whitespace-nowrap">NAMA PETUGAS</th>
                <th class="text-center whitespace-nowrap">USERNAME</th>
                <th class="text-center whitespace-nowrap">TELP</th>
                <th class="text-center whitespace-nowrap">LEVEL</th>
                <th class="text-center whitespace-nowrap">DETAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $petugas as $k => $v )
                <tr class="intro-x">
                    <td class="text-center">{{ $k += 1 }}</td>
                    <td class="text-center">
                        <p class="font-medium whitespace-nowrap">{{ $v->nama_petugas }}</p>
                    </td>
                    <td class="text-center">{{ $v->username }}</td>
                    <td class="text-center">{{ $v->telp }}</td>
                    <td class="text-center">{{ $v->level }}</td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3"
                                href="{{ route('petugas.edit', $v->id) }}"> <i
                                    data-feather="check-square" class="w-4 h-4 mr-1"></i> LIHAT </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
