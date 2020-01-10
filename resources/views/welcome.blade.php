@extends('layout/pertama')

@section('title','HOME')

@section('header')
<div>
        <img src="{{url('1.jpg')}}" class="img-fluid" alt="Responsive image">
        <div>
            <div class="carousel-caption">
                <h1 class="display-1 font-weight-bolder" style="color : black">WELCOME</h1>
                <hr style="height:5px; background-color:black;width:auto;">
                <h3 style="color : black">TO MY WEBSITE</h3>
            </div>
        </div>
    </div>
@endsection