@extends('layouts.admin')

@section('header', 'Data Pengaduan')

@section('content')
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table class="table table-report -mt-2" id="pengaduanTable">
        <thead>
            <tr>
                <th class="text-center whitespace-nowrap">NIK</th>
                <th class="text-center whitespace-nowrap">NAMA</th>
                <th class="text-center whitespace-nowrap">USERNAME</th>
                <th class="text-center whitespace-nowrap">TELP</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $masyarakat as $v )
                <tr class="intro-x">
                    <td class="text-center">
                        <p class="font-medium whitespace-nowrap">{{ $v->nik }}</p>
                    </td>
                    <td class="text-center">
                        <p class="font-medium whitespace-nowrap">{{ $v->nama }}</p>
                    </td>
                    <td class="text-center">
                        <p class="font-medium whitespace-nowrap">{{ $v->username }}</p>
                    </td>   
                    <td class="text-center">
                        <p class="font-medium whitespace-nowrap">{{ $v->telp }}</p>
                    </td>   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
