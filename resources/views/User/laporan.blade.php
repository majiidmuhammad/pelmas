@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'PELMAS - Pelaporan Masyarakat')

@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="content content-bottom rounded-3 shadow bg-light">
                    <div class="p-5">
                        <img src="{{ asset('images/user_default.svg') }}" alt="user profile"
                            class="photo" style="width: 150px;">
                        <div class="self-align mt-2">
                            <h5><a style="color: #6a70fc"
                                    href="#">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                            </h5>
                            <p class="text-dark">
                                {{ Auth::guard('masyarakat')->user()->username }}
                            </p>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <p class="italic mb-0">Terverifikasi</p>
                                <div class="text-center">
                                    {{ $hitung[0] }}
                                </div>
                            </div>
                            <div class="col">
                                <p class="italic mb-0">Proses</p>
                                <div class="text-center">
                                    {{ $hitung[1] }}
                                </div>
                            </div>
                            <div class="col">
                                <p class="italic mb-0">Selesai</p>
                                <div class="text-center">
                                    {{ $hitung[2] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- Section Card --}}
<section class="mt-5" id="laporan">
    <div class="container pb-5">
        <div class="col-lg-12">
            <a class="d-inline tab {{ $siapa != 'me' ? 'tab-active' : '' }} mr-4"
                href="{{ route('pelmas.laporan') }}">
                Semua
            </a>
            <a class="d-inline tab {{ $siapa == 'me' ? 'tab-active' : '' }}"
                href="{{ route('pelmas.laporan', 'me') }}">
                Laporan Saya
            </a>
            <hr class="col-12">
        </div>
        @foreach($pengaduan as $k => $v)
        <div class="card mt-4">
            <div class="card-header">
                {{ $v->user->nama }}
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="card-title">
                            @if($v->status == '0')
                            <p class="text-danger">Pending</p>
                            @elseif($v->status == 'proses')
                            <p class="text-warning">{{ ucwords($v->status) }}</p>
                            @else
                            <p class="text-success">{{ ucwords($v->status) }}</p>
                            @endif
                        </h5>
                        <h2 class="card-text">{{ $v->judul }}</h2>
                        <h5 class="card-title">
                            {{ $v->tgl_pengaduan }}
                        </h5>
                        <p class="card-text">{{ $v->isi_laporan }}</p>
                    </div>
                    <div>
                        @if($v->foto != null)
                        <img src="{{ Storage::url($v->foto) }}"
                                alt="{{ 'Gambar '.$v->judul_laporan }}" class="gambar-lampiran mt-3 mb-3" style="width: 200px; height: 200px;">
                        @endif
                        @if($v->tanggapan != null)
                        <p class="black">Tanggapan : {{ $v->tanggapan->tanggapan }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection

@section('js')
@if(Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
@endif
@endsection
