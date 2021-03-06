@extends('backend.template.main')
@section('insert_caption','Ubah kategori')
@section('view_caption','Lihat Semua Kategori')
@section('insert_link',url("admin/laporan/laporanKategori/tambah-kategori"))
@section('view_link',url("admin/laporan/laporanKategori/list-kategori"))
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach ($laporan_kategori as $gc)
                <form action="{{url("admin/laporan/laporanKategori/update")}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $gc->id_kategori }}">

                    <label for="">Nama Kategori</label>
                <input type="text" class="form-control" name="name" value="{{ $gc->kategori}}">
                    @error('category_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    <br>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
