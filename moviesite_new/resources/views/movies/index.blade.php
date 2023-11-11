<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Movie Review Database</title>    
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <h2>Movie Review Database</h2>
                <div class="justify-end">
                    <div class="col">
                        <a class="btn btn-sm btn-success" href="{{ route('main.index') }}">Back </a>
                        <a class="btn btn-sm btn-success" href="{{ route('movies.create') }}">New Movie</a>
                    </div>
                </div>
            </div>
        </nav>
        <table class="table table-bordered" style="border: 1px;">
            <thead>
                <th>No.</th>
                <th>Movie name</th>
                <th>Movie Director</th>
                <th>Movie Leadactor</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse($movies as $key => $movie)
                <tr>
                    <td>{{ $movies->firstItem() + $key }}</td>
                    <td>{{ $movie->movie_name }}</td>
                    <td>{{ $movie->director->director_fullname }}</td>
                    <td>{{ $movie->leadactor->leadactor_fullname }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{ route('movies.edit', $movie) }}">Edit</a>
                        <div class="col-sm">
                            <form action="{{ route('movies.delete', $movie->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No data found in table</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </body>
</html>