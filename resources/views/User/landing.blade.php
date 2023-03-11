@extends('layouts.user')

@section('title', 'PELMAS - Pelaporan Masyarakat')

@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Pengaduan Masyarakat itu sangat penting untuk kami</h1>
                <hr class="divider"/>
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">mulai sekarang jika ada sesuatu di lingkungan atau sekitar kalian mari
                    kita melapor agar semua permasalahan terselesaikan</p>
                <a class="btn btn-primary btn-xl" href="#laporan">Laporkan</a>
            </div>
        </div>
    </div>
</header>
<section class="page-section mt-5" id="laporan">
    <div class="container px-4 px-lg-5 mt-4">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Mari Isi Laporan Anda</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Laporkan keluhan anda di bawah ini</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                @if(Session::has('pengaduan'))
                    <div class="alert alert-{{ Session::get('type') }}">
                        {{ Session::get('pengaduan') }}</div>
                @endif
                <form action="{{ route('pelmas.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="judul" id="judul" type="text"
                            data-sb-validations="required">{{ old('judul') }}</textarea>
                        <label for="judul" name="judul">Judul</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="isi_laporan" id="name" type="text"
                            data-sb-validations="required">{{ old('isi_laporan') }}</textarea>
                        <label for="name" name="isi_laporan">Isi Laporan</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
