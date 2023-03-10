@extends('layouts.admin')

@section('header', 'Data Pengaduan')

@section('content')
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table class="table table-report -mt-2" id="pengaduanTable">
        <thead>
            <tr>
                <th class="text-center whitespace-nowrap">ISI LAPORAN</th>
                <th class="text-center whitespace-nowrap">TANGGAL</th>
                <th class="text-center whitespace-nowrap">STATUS</th>
                <th class="text-center whitespace-nowrap">DETAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $pengaduan as $v )
                <tr class="intro-x">
                    <td class="text-center">
                        <p class="font-medium whitespace-nowrap">{{ $v->isi_laporan }}</p>
                    </td>
                    <td class="text-center">{{ $v->tgl_pengaduan }}</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center"> 
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
            <td class="table-report__action w-56">
                <div class="flex justify-center items-center">
                    <a class="flex items-center mr-3" href="{{ route('pengaduan.show', $v->id) }}"> <i data-feather="check-square"
                            class="w-4 h-4 mr-1"></i> Tanggapan </a>
                </div>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
