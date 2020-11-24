@extends('backend.template.main')
@section('insert_caption','Insert New postingan')
@section('view_caption','View All postingan')
@section('insert_link','tambah-postingan')
@section('view_link','list-postingan')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Gallery Postingan')
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
                                <th>Gambar</th>
                                <th>Kategori Postingan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gallery as $g)
                            <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $g->img}}</td>
                            <td>{{ $g->id_category}}</td>
                                <td>
                                <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item"  href="ubah-postingan/">Edit</a>
                                            <a class="dropdown-item"  href="">Delete</a>
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