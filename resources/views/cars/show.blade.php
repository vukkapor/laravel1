@extends('layouts.master')



<!DOCTYPE html>
<html lang="en">
<head>
        @section('title')
        {{$car->title}}
        @endsection
</head>
<body>


@section('content')
    <div class="container">
        <li>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 blog-main">
                        <p class="lead">Car name: {{$car->title}}<br></p>
                        <p class="lead">Car producer: {{$car->producer}}<br></p>
                        <p class="lead">Number of doors: {{$car->number_of_doors}}</p>
                    </div>
                </div>
            </div>
        </li>
    </div>
@endsection
</body>
</html>
