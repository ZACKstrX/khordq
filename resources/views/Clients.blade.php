<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    </head>
    <body >
        <div class="container d-flex justify-content-center align-items-center min-vh-100 " >
            <form class="row g-3 needs-validation" novalidate>
                <h1 class="d-flex r col-md-4 ">Please Sign-Up</h1>
                <div class="row g-3  d-flex gap-3">     
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name..." required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name..." required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>    
                </div></div>

                <div class="row g-3  d-flex gap-3">
                <div class="col-md-4">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <input name = "email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                      <div class="invalid-feedback">
                        Please Type your Email.
                      </div>

                  </div> 
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Class</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Free</option>
                    <option>Premium</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div></div>

              
                <div class="col-12">
                    
                    <label for="validationCustomEmail" class="form-label">Birthday</label>
                    <input type="text" class="form-control datepicker w-auto" placeholder="Pick a Date">
                    <div class="form-check">
                    <div class="invalid-feedback">
                      Please Select your birthday
                    </div>
                  </div>
                </div>


                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
      
        <!-- Initialize Datepicker -->
        <script>
          $(document).ready(function() {
            // Initialize datepicker on input with class 'datepicker'
            $('.datepicker').datepicker({
              format: 'mm/dd/yyyy', // You can change the date format here
              startDate: '-3d' // Optionally, you can set the starting date for the calendar
            });
          });
        </script>
    </body>
</html>
