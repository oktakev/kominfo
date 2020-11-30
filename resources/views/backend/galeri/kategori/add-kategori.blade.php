@extends('backend.template.main')
@section('insert_caption','Tambah Kategori Baru')
@section('view_caption','Lihat Semua Kategori')
@section('insert_link','tambah-kategori')
@section('view_link','list-categories')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Gallery Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/galeri/categories/proses")}}" method="post">
                {{ csrf_field()}}
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
