<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>My Movie Site</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand hq" href="{{ route('main.index') }}">Movie Database Review</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('movies.index') }}">Movies</a>
                    <a class="btn btn-sm btn-success" href="{{ route('directors.index') }}">Directors</a>
                    <a class="btn btn-sm btn-success" href="{{ route('leadactors.index') }}">Leadactors</a> 
                </div>
            </div>
        </div>
    </nav>
</body>
</html>