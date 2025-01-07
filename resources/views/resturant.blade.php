<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body >
        <form method="POST" action="{{route("resturant.Post")}}">
            @csrf
        <div class="mb-3 row">
            <label  for="Resturant Name" class="col-sm-2 col-form-label">Resturant Name</label>
            <div class="col-sm-10">
              <input name="resturant_name" type="text" class="form-control" id="resturant_name">                
            </div>
        </div>
            @error('resturant_name')
            <span class ="text-danger">{{ $message }}</span>
            @enderror

        <div class="mb-3 row">
            <label for="Speciality" class="col-sm-2 col-form-label">Speciality</label>
            <div class="col-sm-10">
              <input name='speciality' type="text" class="form-control" id="speciality">
            </div>
        </div>
        @error('speciality')
            <span class ="text-danger">{{ $message }}</span>
            @enderror

        <div class="mb-3 row">
            <label for="Location" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-10">
              <input name="location" type="text" class="form-control" id="location">
            </div>
          </div>
          @error('email')
            <span class ="text-danger">{{ $message }}</span>
            @enderror

          <div class="mb-3 row">
            <label for="number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input name="number" type="tel" class="form-control" id="number">
            </div>
        </div>
        @error('number')
        <span class ="text-danger">{{ $message }}</span>
        @enderror

        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
    </body>
</html>
