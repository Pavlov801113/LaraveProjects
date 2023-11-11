<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Movie Leadactor</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <h2>Edit Movie Leadactor</h2>
            @if(session('message'))
            <div style="color: green;">{{ session('message') }}</div>
            @endif
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('leadactors.index') }}">Back</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <form action="{{ route('leadactors.edit', $leadactor) }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="leadactor_fullname">Leadactor Name</label>
            <input type="text" name="leadactor_fullname" id="leadactor_fullname" placeholder="Leadactor name" value="{{ $leadactor->leadactor_fullname }}">
            @error('leadactor_fullname')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-sm btn-success" type="submit">Submit</button>
        </div>    
    </form>
    </body>
</html>