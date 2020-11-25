@extends('backend.template.main')
@section('insert_caption','Edit postingan')
@section('view_caption','View All postingan')
@section('insert_link',url("admin/galeri/postingan/tambah-postingan"))
@section('view_link',url("admin/galeri/postingan/list-postingan"))
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Postingan')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/galeri/postingan/edit-postingan/update")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @foreach($id_gallery as $gc)
                        <input type="hidden" name="id" value="{{ $gc->id_gallery }}">
                        @endforeach
                        <label for="" class="">Gambar Postingan</label>
                        <input type="file" name="img" class="form-control">
                        <br>
                        <label for="">Kategori Galeri</label>
                        <select class="form-control" name="id_category" id="">
                        <option value="">---Pilih Kategori---</option>
                        @foreach ($id_category as $item)
                        <option value="{{ $item->id_category }}"> {{ $item->category_name }} </option>
                         @endforeach
                        </select>   
                        <br>
                        <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                        <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
