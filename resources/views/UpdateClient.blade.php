<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Updating</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form class="row g-3 needs-validation" novalidate method="POST" action="/EditClient">
            @csrf
            <h1 class="col-md-4">Update The Client Information</h1>
            <div class="row g-3 d-flex gap-3">
                <div class="col-md-4">
                    <label for="first_name" class="form-label">First name</label>
                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name..." required  value={{$updatedinfo->first_name}}>
                   
                    @error('first_name')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-md-4">
                    <label for="last_name" class="form-label">Last name</label>
                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name..." required  value={{$updatedinfo->last_name}}>
            
                    @error('last_name')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row g-3 d-flex gap-3">
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required  value={{$updatedinfo->email}}>
                    </div>
                    @error('email')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-md-3">
                    <label for="class" class="form-label">Class</label>
                    <select name="class" class="form-select" id="class" required  >
                        <option disabled {{$updatedinfo->class ?'' : 'selected'}}>Choose...</option>
                        <option value="free" {{$updatedinfo->class =='free' ? 'selected' : ''}}>Free</option>
                        <option value="premium" {{$updatedinfo->class =='premium' ? 'selected' : ''}}>Premium</option>
                    </select>
                    @error('class')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="col-12">
                <div class="d-flex align-items-center mb-3">
                    <div>
                        <label for="birthday" class="form-label">Birthday</label>
                        <input name="birthday" id="birthday" type="text" class="form-control datepicker w-auto" placeholder="Pick a Date" required value={{$updatedinfo->birthday}}>
                        @error('birthday')
                        <span class ="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="ms-4">
                        <label class="form-label">Gender</label>
                        <div class="d-flex align-items-center gap-3">
                            <div class="form-check">
                                <input class="form-check-input" 
                                       type="radio"
                                       name="sexe" 
                                       id="male" 
                                       value="0"
                                       {{$updatedinfo->sexe==0 ? 'checked':''}}
                                       required>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>  
                            <div class="form-check">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="sexe" 
                                       id="female" 
                                       value="1"
                                       {{$updatedinfo->sexe==1 ? 'checked':''}} 
                                       required>
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        @error('sexe')
                    <span class ="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div> 
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#birthday').datepicker({
                format: 'yyyy/mm/dd', 
                endDate: '0d', 
                autoclose: true, 
                startView: 2,
                todayHighlight: true 
            });
        });
    </script>
    
</body>
</html>
