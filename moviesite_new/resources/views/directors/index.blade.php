<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Movie Director Review</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <h2>Movie Director Review</h2>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('main.index') }}">Back</a>
                    <a class="btn btn-sm btn-success" href="{{ route('directors.create') }}">New Director</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <table class="table table-bordered" style="border: 1px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Director Fullname</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($directors as $key => $director)
            <tr>
                <td>{{ $directors->firstItem() + $key }}</td>
                <td>{{ $director->director_fullname }}</td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{ route('directors.edit', $director) }}">Edit</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No data found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>