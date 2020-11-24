@extends('backend.template.main')
@section('insert_caption','Ubah kategori')
@section('view_caption','View All kategori')
@section('insert_link','ubah-kategori')
@section('view_link','list-categories')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                {{-- @foreach ($id_category as $gc) --}}
                <form action="{{url("admin/galeri/categories/update")}}" method="post">
                @csrf
                <input type="hidden" name="" value="">
                    <label for="">Category Name</label>
                <input type="text" class="form-control" name="" value="">
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
