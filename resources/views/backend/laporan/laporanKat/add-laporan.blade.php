@extends('backend.template.main')
@section('insert_caption','Tambah Kategori Baru')
@section('view_caption','Lihat Semua Kategori')
@section('insert_link','tambah-kategori')
@section('view_link','list-kategori')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Laporan Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ url('admin/laporan/laporanKategori/proses') }}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Kategori</label>
                                <input type="text" name="kategori" class="form-control  @error('kategori') is-invalid @enderror" placeholder="Name"
                                value="{{ old('kategori')}}">
                                @error('kategori')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" value="Simpan Data"><span class="mdi mdi-content-save"></span> Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
