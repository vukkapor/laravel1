@extends('layouts.master')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        Cars
    @endsection
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

@section('content')

        <ul>
            @foreach ($cars as $car)
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 blog-main">
                                    <a href="{{"cars/" . $car->id}}">{{$car->title}}</a>
                                    <p class="lead">Car producer: {{$car->producer}}<br></p>
                                    <p class="lead">Car name: {{$car->title}}<br></p>
                                    <p class="lead">Number of doors: {{$car->number_of_doors}}</p>
                                </div>
                            </div>
                        </div>
                    </li>
            @endforeach
        </ul>
@endsection
</body>
</html>
