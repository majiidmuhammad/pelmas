@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('pengaduan.index') }}">Data Pengaduan</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-frey">Detail Pengaduan</a></li>
</ol>


<a href="#" class="text-grey"></a>
@endsection

@section('content')
<div class="intro-y box lg:mt-5">
    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">
            Pengaduan Masyarakat
        </h2>
    </div>
    <div class="p-5">
        <div class="flex flex-col-reverse xl:flex-row flex-col">
            <div class="flex-1 mt-6 xl:mt-0">
                <form action="{{ route('tanggapan.createOrUpdate') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 2xl:col-span-6">
                            <input type="hidden" name="status" value="selesai">
                            <input type="hidden" name="id" value="{{ $pengaduan->id }}">
                            <div>
                                <label for="update-profile-form-1" class="form-label">Nik</label>
                                <input id="update-profile-form-1" type="text" class="form-control"
                                    placeholder="Input text" disabled value="{{ $pengaduan->nik }}">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-2" class="form-label">Tanggal Pegaduan</label>
                                <input id="update-profile-form-1" type="text" class="form-control"
                                    placeholder="Input text" disabled value="{{ $pengaduan->tgl_pengaduan }}">
                            </div>
                        </div>

                        <div class="col-span-12">
                            <div class="mt-3">
                                <label for="update-profile-form-5" class="form-label">Tanggapan</label>
                                <textarea name="tanggapan" id="tanggapan" rows="4" class="form-control"
                                    placeholder="Belum ada tanggapan">{{ $tanggapan->tanggapan ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="sumbit" class="btn btn-primary w-20 mt-3">Save</button>
                </form>
            </div>
            <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                <div
                    class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="w-full h-64 my-5 image-fit">
                        <img alt="Foto Pengaduan" src="{{ Storage::url($pengaduan->foto) }}"
                            data-action="zoom" class="w-full rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
