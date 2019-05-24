<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>


        <ul>
            @foreach ($cars as $car)
                <li>
                    <a href="{{"cars/" . $car->id}}">

                        Car producer: {{$car->producer}}<br>
                        Car name: {{$car->title}}<br>
                        Number of doors: {{$car->number_of_doors}}<br>
                    </a>
                    <br>
                </li>
            @endforeach
        </ul>

</body>
</html>
