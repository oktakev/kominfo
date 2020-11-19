@extends('backend.template.main')
@section('insert_caption','Insert New hoax')
@section('view_caption','View All hoax')
@section('insert_link','tambah-isu')
@section('view_link','list-isu')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Hoax')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ url('admin/laporan/laporan-isu/tambah-isu') }}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Judul</label>
                                <input type="text" name="judul" class="form-control  @error('judul') is-invalid @enderror" placeholder="Judul"
                                value="{{ old('judul')}}">
                                @error('judul')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Kategori</label>
                                <select class="select form-control @error('id_category') is-invalid @enderror" name="id_category" id=""
                                value="{{ old('id_category')}}">
                                    <option value="">---Select---</option>
                    
                                </select>
                                 @error('Category')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                                </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Link</label>
                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link')}}">
                                @error('link')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Gambar</label>
                                <input type="text" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar')}}">
                                @error('gambar')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12 text-center m-t-15">
                                <label for="">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" cols="30" rows="10">
                                {{ old('content')}}</textarea>
                                @error('content')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
