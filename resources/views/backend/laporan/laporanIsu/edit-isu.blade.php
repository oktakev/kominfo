@extends('backend.template.main')
@section('insert_caption','Tambah Laporan Hoaks')
@section('view_caption','Lihat Semua Hoaks')
@section('insert_link',url("admin/laporan/laporanIsu/tambah-isu"))
@section('view_link',url("admin/laporan/laporanIsu/list-isu"))
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Hoax')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($hoax as $h)
            @include('backend.galeri.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories])
             <form action="{{url("admin/laporan/laporanIsu/update")}}" method="post">
                {{ csrf_field()}}
                <input type="hidden" name="id" value="{{ $h->id_hoax }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Judul</label>
                                <input type="text" name="judul" value="{{ $h->judul}}" class="form-control">
                            </div>
                            <div class="col-md-6 m-t-15">
                            <label for="">Kategori</label>
                                <select class="select form-control" name="id_kategori" id="">
                                value="{{ old('id_kategori')}}">
                                    @foreach($laporan_kategori as $l)
                                    <option value="{{ $l->id_kategori }}">{{ $l->kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Sumber</label>
                                <input type="text" name="sumber" class="form-control" value="{{ $h->sumber}}">
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Gallery</label>
                                @include('backend.galeri.gallery-template.gallery-hidden')
                            </div>
                            <div class="col-md-12 m-t-30">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" id="konten" cols="30" rows="10">{{ $h->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection