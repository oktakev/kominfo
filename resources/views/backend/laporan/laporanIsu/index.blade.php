@extends('backend.template.main')
@section('insert_caption','Insert New hoax')
@section('view_caption','View All hoax')
@section('insert_link','tambah-isu')
@section('view_link','list-isu')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Laporan Hoax')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="zero_config" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Link Sumber</th>
                                <th>Tanggal Upload</th>
                                <th>Gambar</th>
                                <th>deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hoax as $h)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $h->judul}}</td>
                            <td>{{ $h->id_kategori }}</td>
                            <td>{{ $h->link_sumber }}</td>
                            <td>{{ $h->tanggal_upload }}</td>
                            <td>{{ $h->gambar}}</td>
                            <td>{{ $h->content }}</td>
                                <td>
                                <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item"  href="edit-city/">Edit</a>
                                            <a class="dropdown-item"  href="edit-city/">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
