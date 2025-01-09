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
        <form method="POST" action="/resturant">
            @csrf
        <div class="mb-3 row">
            <label  for="firstname" class="col-sm-2 col-form-label">FirstName</label>
            <div class="col-sm-10">
              <input name="firstname" type="text" class="form-control" id="firstname">                
            </div>
        </div>
            @error('firstname')
            <span class ="text-danger">{{ $message }}</span>
            @enderror

        <div class="mb-3 row">
            <label for="lastname" class="col-sm-2 col-form-label">LastName</label>
            <div class="col-sm-10">
              <input name='lastname' type="text" class="form-control" id="lastname">
            </div>
        </div>
        @error('lastname')
            <span class ="text-danger">{{ $message }}</span>
            @enderror

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="email" class="form-control" id="email" value="email@example.com">
            </div>
          </div>
          @error('email')
            <span class ="text-danger">{{ $message }}</span>
            @enderror

          <div class="mb-3 row">
            <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input name="phone_number" type="tel" class="form-control" id="phone_number">
            </div>
        </div>
        @error('phone_number')
        <span class ="text-danger">{{ $message }}</span>
        @enderror

        <div class="mb-3 row">
            <label for="age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
              <input name="age" type="number" class="form-control" id="age">
            </div>
        </div>
        @error('age')
            <span class ="text-danger">{{ $message }}</span>
            @enderror
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
    </body>
</html>
