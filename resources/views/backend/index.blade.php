@extends('backend.template.main')
@section('insert_caption','')
@section('view_caption','')
@section('insert_link','')
@section('view_link','')
@section('view_status','')
@section('insert_status','')
@section('admin')
<div class="row">
    <!-- Column -->
    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Best package on                     <br>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Income on
                    <br>
                </h5>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Booking on
                    <br>
                </h5>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-hover">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                <h5 class="text-white">
                    Tour Packages
                    <br>
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
                <h5 class="color-orange">Best Package On</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Position</td>
                                <td>Package Name</td>
                                <td>Durations</td>
                                <td>Booking</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> "<span style='line-height:80%;font-size:30px' class='mdi mdi-crown color-orange'></span>" </td>
                                <td></td>
                                <td>Days Nights</td>
                                <td>x</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="box">
                <h5 class="color-orange">Nearest Trip</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>User</td>
                                <td>Package Name</td>
                                <td>Durations</td>
                                <td>Travel Start</td>
                                <td>Travel Finish</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Days Nights</td>
                                <td></td>
                                <?php 
                                    
                                ?>
                              <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
