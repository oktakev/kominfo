@extends('backend.template.main')
@section('insert_caption','Ubah kategori')
@section('view_caption','View All kategori')
@section('insert_link',url("admin/galeri/categories/tambah-kategori"))
@section('view_link',url("admin/galeri/categories/list-categories"))
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach ($gallery_categories as $gc)
                <form action="{{url("admin/galeri/categories/update")}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $gc->id_category }}">
                    <label for="">Category Name</label>
                <input type="text" class="form-control" name="nama" value="{{ $gc->category_name}}">
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
