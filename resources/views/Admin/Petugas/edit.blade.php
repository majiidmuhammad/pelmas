@extends('layouts.admin')

@section('title', 'Form Edit Petugas')

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
<a href="#" class="text-frey">Form Edit Petugas</a>
@endsection

@section('content')
<div class="intro-y box">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">
            Form Edit Petugas
        </h2>
    </div>
    <div id="input" class="p-5">
        <div class="preview">
            <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                    <input name="nama_petugas" value="{{ $petugas->nama_petugas }}" id="nama_petugas" type="text"
                        class="form-control form-control-rounded" placeholder="Nama Petugas" required>
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" value="{{ $petugas->username }}" id="username" type="text"
                        class="form-control form-control-rounded" placeholder="Username" required>
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-rounded"
                        placeholder="Password" required>
                </div>
                <div class="mt-3">
                    <label for="telp" class="form-label">NO Telpn</label>
                    <input type="number" value="{{ $petugas->telp }}" name="telp" id="telp"
                        class="form-control form-control-rounded" placeholder="No Telp" required>
                </div>
                <div class="mt-3">
                    <label for="level" class="form-label">Level</label>
                    <div class="flex flex-col sm:flex-row items-center">
                        <select name="level" id="level" class="form-select mt-2 sm:mr-2 "
                            aria-label="Default select example">
                            @if($petugas->level == 'admin')
                                <option selected value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            @else
                                <option value="admin">Admin</option>
                                <option selected value="petugas">Petugas</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning text-white mt-5" style="width: 100%">UPDATE</button>
            </form>
            <form action="{{ route('petugas.destroy', $petugas->id) }}" method="post" class="mt-5" style="text-align: right;">
                @csrf
                @method('DELETE')
                <button type="sumbit" class="btn btn-danger" style="width: 20%">HAPUS</button>
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
