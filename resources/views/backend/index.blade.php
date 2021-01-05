@extends('backend.template.main')
@section('admin')
<div class="row">
    <!-- Column -->
    <?php 
        foreach ($lapfakta as $key => $value) {
            $data = DB::table("hoax")
            ->select(array(DB::raw('count(id_hoax) as ttl')))
            ->where('id_kategori',$value->id_kategori)
            ->get();
    ?>
    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                Jumlah Laporan {{$value ->kategori}} 
                    <br>
                    <?php 
                        echo $data[0]->ttl;
                    ?>
                </h5>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Jumlah Total Laporan
                    <br>
                    {{$hoaks[0]->ttl}}
                </h5>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Jumlah Total Galeri
                    <br>
                    {{$galeri[0]->ttl}}
                </h5>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="box">
                <h5 class="color-orange">Laporan Terpopuler</h5>
                <div class="table-responsive">
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Position</td>
                                <td>Judul Berita</td>
                                <td>Kategori</td>
                                <td>Tanggal Upload</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hoax as $h)
                            <tr>
                            <td><?php echo $loop->iteration==1 ? "<span style='line-height:80%;font-size:30px' class='mdi mdi-crown color-orange'></span>" : $loop->iteration; ?></td>
                                <td>{{ $h->judul}}</td>
                                <td>{{ $h->kategori }}</td>
                                <td>{{ $h->tanggal_upload }}</td>
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
