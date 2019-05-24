<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

        <ul>
            @foreach ($cars as $car)
                <div class="container">

                    <li>
                        <a href="{{"cars/" . $car->id}}">

                            Car producer: {{$car->producer}}<br>
                            Car name: {{$car->title}}<br>
                            Number of doors: {{$car->number_of_doors}}<br>
                        </a>
                        <br>
                    </li>
                </div>
            @endforeach
        </ul>

</body>
</html>
