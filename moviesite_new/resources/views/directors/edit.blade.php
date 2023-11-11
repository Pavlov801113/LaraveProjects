<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Movie Director</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <h2>Edit Movie Ditrector</h2>
            @if(session('message'))
            <div style="color: green;">{{ session('message') }}</div>
            @endif
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('directors.index') }}">Back</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <form action="{{ route('directors.edit', $director) }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="director_fullname">Director Name</label>
            <input type="text" name="director_fullname" id="director_fullname" placeholder="Director name" value="{{ $director->director_fullname }}">
            @error('director_fullname')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-sm btn-success" type="submit">Submit</button>
        </div>
    </form>
    </body>
</html>