@extends('layouts.admin')

@section('title', 'Form Tambah Petugas')

@section('css')
<style>
    .text-primary:hover {
        text-decoration: underline;
    }

    .text-grey {
        color: #6c757d;

    }

    .text-grey:hover {
        color: #6c757d;

    }

</style>
@endsection

@section('header')
<a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
<a href="#" class="text-grey"></a>
<a href="#" class="text-frey">Form Tambah Petugas</a>
@endsection

@section('content')
<div class="intro-y box">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">
            Form Tambah Petugas
        </h2>
    </div>
    <div id="input" class="p-5">
        <div class="preview">
            <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div>
                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                    <input name="nama_petugas" id="nama_petugas" type="text" class="form-control form-control-rounded"
                        placeholder="Nama Petugas" required>
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" id="username" type="text" class="form-control form-control-rounded"
                        placeholder="Username" required>
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-rounded"
                        placeholder="Password" required>
                </div>
                <div class="mt-3">
                    <label for="telp" class="form-label">NO Telpn</label>
                    <input type="number" name="telp" id="telp" class="form-control form-control-rounded"
                        placeholder="No Telp" required>
                </div>
                <div class="mt-3">
                    <label for="level" class="form-label">Level</label>
                    <div class="flex flex-col sm:flex-row items-center">
                        <select name="level" id="level" class="form-select mt-2 sm:mr-2 "
                            aria-label="Default select example">
                            <option value="petugas" selected>Pilih Level (Default Petugas)</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-4" style="width: 100%">SIMPAN</button>
            </form>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        @if(Session::has('username'))
            <div class="alert alert-danger">
                {{ session::get('username') }}
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
