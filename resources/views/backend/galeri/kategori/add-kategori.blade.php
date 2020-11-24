@extends('backend.template.main')
@section('insert_caption','Insert New kategori')
@section('view_caption','View All kategori')
@section('insert_link','tambah-kategori')
@section('view_link','list-categories')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/laporan/laporanKategori/tambah-kategori")}}" method="post">
                @csrf
                    <label for="">Nama Kategori</label>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name">
                    @error('category_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    <br>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
