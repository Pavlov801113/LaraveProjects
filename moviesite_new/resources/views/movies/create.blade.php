<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Create New Movie</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <h2>Create New Movie</h2>
            @if(session('message'))
            <div style="color: green;">{{ session('message') }}</div>
            @endif
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('movies.index') }}">Back</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <form action="{{ route('movies.create') }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="movie_name">Movie Name</label>
            <input type="text" name="movie_name" id="movie_name" placeholder="Enter movie name">
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="movie_director">Movie Director</label>
            <select name="director_id" id="director_id">
                <option value="">Select</option>
                @foreach($directors as $director)
                <option 
                @if($director->id === (int)old('director_id'))
                selected
                @endif
                value="{{ $director->id }}">{{ $director->director_fullname }}</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 1em;">
            <label for="movie_leadactor">Movie Leadactor</label>
            <select name="leadactor_id" id="leadactor_id">
                <option value="">Select</option>
                @foreach($leadactors as $leadactor)
                <option
                @if($leadactor->id === (int)old('leadactor_id'))
                selected
                @endif
                value="{{ $leadactor->id }}">{{ $leadactor->leadactor_fullname }}</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 1em;">
            <label for="movie_type">Movie type</label>
            <select name="movietype_id" id="movietype_id">
                <option value="">Select</option>
                @foreach($movietypes as $movietype)
                <option
                @if($movietype->id === (int)old('movietype_id'))
                selected
                @endif
                value="{{ $movietype->id }}">{{ $movietype->movietype_label }}</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 1em;">
            <label for="movie_year">Movie Year</label>
            <input type="text" name="movie_year" id="movie_year" placeholder="Movie year">
        </div>
        <div>
            <button class="btn btn-sm btn-success" type="submit">Submit</button>
        </div>
    </form>
</body>
</html>