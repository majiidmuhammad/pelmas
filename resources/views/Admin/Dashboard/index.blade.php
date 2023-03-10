@extends('layouts.admin')

<blade
    section|(%26%2339%3Btitle%26%2339%3B%2C%20%26%2339%3BDashboard%20-%20PELMAS%20-%20Pelaporan%20Masyarakat%26%2339%3B) />

@section('header', 'Dashboard')

@section('content')
<!-- BEGIN: Item List -->
<div class="intro-y col-span-12 lg:col-span-12">
    <div class="grid grid-cols-12 gap-5 mt-5">
        <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
            <div class="font-medium text-base">Petugas</div>
            <div class="text-slate-500">{{ $petugas }}</div>
        </div>
        <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
            <div class="font-medium text-base">Masyarakat</div>
            <div class="text-slate-500">{{ $masyarakat }}</div>
        </div>
        <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
            <div class="font-medium text-base">Pengaduan Proses</div>
            <div class="text-slate-500">{{ $proses }}</div>
        </div>
        <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
            <div class="font-medium text-base">Pengaduan Selesai</div>
            <div class="text-slate-500">{{ $selesai }}</div>
        </div>
    </div>
</div>
@endsection
