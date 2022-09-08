<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body class="bg-dark">
    <header>
        <h1 class="text-danger text-center mt-5 mb-0">
            LARAVEL-MODEL-CONTROLLER
        </h1>
    </header>
    <main class="container my-5">
        <div class="row row-cols-5 g-5">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card longo-card text-bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ $movie->date }}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{$movie->nationality}}</p>
                        <p class="card-text">Voto: {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>

</html>