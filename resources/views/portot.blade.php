@extends('layout/pertama')
@section('title','GALERI')

@section('header')
<div>
        <img src="{{url('3.jpg')}}" class="img-fluid" alt="Responsive image">
        <div>
            <div class="carousel-caption">
                <h1 class="display-1 font-weight-bolder" style="color : black">PORTOFOLIO</h1>
                <hr style="height:5px; background-color:black;width:auto;">
                <h3 style="color : black">APP BLENDER</h3>
            </div>
        </div>
    </div>
@endsection

@section('porto')
<div class='container mt-5'>
    <div class="row">
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img1/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img1/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img1/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img1/4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img1/5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img1/6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection

