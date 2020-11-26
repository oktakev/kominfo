@extends('backend.template.main')
@section('insert_caption','Tambah Postingan Baru')
@section('view_caption','Lihat Semua Postingan')
@section('insert_link','tambah-postingan')
@section('view_link','list-postingan')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Tambah Postingan')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/galeri/postingan/tambah-postingan")}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- @csrf --}}
                        {{-- <label for="">Gallery Name</label>
                        <input type="text" class="form-control"  @error('img') is-invalid @enderror" name="img">
                        @error('img')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror --}}
                        <label for="" class="">Gambar Postingan</label>
                        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                        @error('img')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                        <br>
                        <label for="">Kategori Galeri</label>
                        <select class="form-control" name="id_category" id="">
                        <option value="">---Pilih Kategori---</option>
                        @foreach($gallery_categories as $gl)
                            <option value="{{ $gl->id_category }}">{{ $gl->category_name}}</option>
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
