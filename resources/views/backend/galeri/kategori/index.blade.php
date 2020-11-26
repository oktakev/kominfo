@extends('backend.template.main')
@section('insert_caption','Tambah Kategori Baru')
@section('view_caption','Lihat Semua Kategori')
@section('insert_link','tambah-kategori')
@section('view_link','list-categories')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Gallery Kategori')
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
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gallery_categories as $cg )
                            <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $cg->category_name}}</td>
                                <td>
                                <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="edit-kategori/{{$cg->id_category}}">Edit</a>
                                            <a class="dropdown-item"  href="edit-city/">Delete</a>
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