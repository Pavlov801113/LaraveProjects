<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compitable" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Edit Movie</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <h2>Edit Movie</h2>
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
        <form action="{{ route('movies.edit', $movie) }}" method="post">
            @csrf
            <div style="margin-bottom: 1em;">
                <label for="movie_name">Movie Name</label>
                <input type="text" name="movie_name" id="movie_name" placeholder="Movie name" value="{{ $movie->movie_name }}">
                @error('movie_name')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 1em;">
                <label for="directors">Movie Director</label>
                <select name="director_id" id="director_id">
                    <option value="">Select</option>
                    @foreach($directors as $director)
                    <option 
                        @if($director->id === (int)$movie->director_id)
                        selected
                        @endif
                        value="{{ $director->id }}">{{ $director->director_fullname }}</option>
                    @endforeach    
                </select>
                @error('director_id')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 1em;">
                <label for="leadactors">Movie Leadactor</label>
                <select name="leadactor_id" id="leadactor_id">
                    <option value="">Select</option>
                    @foreach($leadactors as $leadactor)
                    <option
                        @if($leadactor->id === (int)$movie->leadactor_id)
                        selected
                        @endif
                        value="{{ $leadactor->id }}">{{ $leadactor->leadactor_fullname }}</option>
                    @endforeach    
                </select>
                @error('leadactor_id')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 1em;">
                <label for="movietypes">Movie Type</label>
                <select name="movietype_id" id="movietype_id">
                    <option value="">Select</option>
                    @foreach($movietypes as $movietype)
                    <option
                        @if($movietype->id === (int)$movie->movietype_id)
                        selected
                        @endif
                        value="{{ $movietype->id }}">{{ $movietype->movietype_label }}</option>
                    @endforeach    
                </select>
                @error('movietype_id')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 1em;">
                <label for="movie_year">Movie Year</label>
                <input type="text" name="movie_year" id="movie_year" placeholder="Movie year" value="{{ $movie->movie_year }}">
                @error('movie_year')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button class="btn btn-sm btn-success" type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>