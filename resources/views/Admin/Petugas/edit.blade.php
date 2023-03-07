@extends('layouts.admin')

@section('title', 'Form Edit Petugas')

@section('css')
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }

        .text-grey{
            color: #6c757d;
            
        }

        .text-grey:hover{
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
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    Form Edit Petugas
                </div>
                <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input type="text" value="{{$petugas->nama_petugas}}" name="nama_petugas" id="nama_petugas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="{{$petugas->username}}" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">NO Telpn</label>
                            <input type="number" value="{{$petugas->telp}}" name="telp" id="telp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group mt-3">
                                <select name="level" id="level" class="custom-select">
                                    @if ($petugas->level == 'admin')
                                    <option selected value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                    @else
                                    <option value="admin">Admin</option>
                                    <option selected value="petugas">Petugas</option> 
                                    @endif
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button>
                    </form>
                    <form action="{{ route('petugas.destroy', $petugas->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="sumbit" class="btn btn-danger" style="width: 100%">HAPUS</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection