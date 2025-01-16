<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dear Client</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form class="row g-3 needs-validation"   method="POST" action="{{url("EditResturant/".$updatedinfo->id)}}">
            @csrf
            <h1 class="col-md-4">Your Resturant Information</h1>
            <div class="row g-3 d-flex gap-3">
                <div class="col-md-4">
                    <label for="resturant_name" class="form-label">Resturant name :</label>
                    <input name="resturant_name" type="text" class="form-control" id="resturant_name" placeholder="Resturant Name..." required value={{$updatedinfo->resturant_name}}>
                   
                    @error('resturant_name')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-md-4">
                    <label for="speciality" class="form-label">Speciality :</label>
                    <input name="speciality" type="text" class="form-control" id="speciality" placeholder="Speciality..." required value={{$updatedinfo->speciality}}>
            
                    @error('speciality')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row g-3 d-flex gap-3">
                <div class="col-md-4">
                    <label for="email" class="form-label">Email :</label>
                    <div class="input-group has-validation">
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required value={{$updatedinfo->email}}>
                    </div>
                    @error('email')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4">
                  <label for="location" class="form-label">Location :</label>
                  <input name="location" type="text" class="form-control" id="location" placeholder="location..." required value={{$updatedinfo->location}}>
          
                  @error('location')
                  <span class ="text-danger">{{ $message }}</span>
                  @enderror
              </div>
                </div>
                <div class="col-md-4">
                    <label for="number" class="form-label">Number :</label>
                    <input name="number" type="text" class="form-control" id="number" placeholder="number..." required value={{$updatedinfo->number}}>
            
                    @error('number')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-dark" type="submit">Update</button>
                </div>
            </div> 

      </div>
      
        </form>
    </div>
    
</body>
</html>
