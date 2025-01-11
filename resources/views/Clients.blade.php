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
        <form class="row g-3 needs-validation" novalidate method="POST" action="/signup">
            @csrf
            <h1 class="col-md-4">Please Sign-Up</h1>
            <div class="row g-3 d-flex gap-3">
                <div class="col-md-4">
                    <label for="first_name" class="form-label">First name</label>
                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name..." required>
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-4">
                    <label for="last_name" class="form-label">Last name</label>
                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name..." required>
                    <div class="valid-feedback">Looks good!</div>
                </div>
            </div>
            <div class="row g-3 d-flex gap-3">
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                        <div class="invalid-feedback">Please type your email.</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="class" class="form-label">Class</label>
                    <select name="class" class="form-select" id="class" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="free">Free</option>
                        <option value="premium">Premium</option>
                    </select>
                    <div class="invalid-feedback">Please select a valid class.</div>
                </div>
            </div>
            <div class="col-12">
                <label for="birthday" class="form-label w-auto">Birthday</label>
                <input name="birthday" id="birthday" type="text" class="form-control datepicker" placeholder="Pick a Date" required>
                <div class="invalid-feedback">Please select your birthday.</div>

            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Sign Up</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function () {
            // Initialize datepicker with year navigation
            $('#birthday').datepicker({
                format: 'yyyy/mm/dd', // Date format
                endDate: '0d', // Prevent selecting future dates
                autoclose: true, // Close picker after selecting a date
                startView: 2, // Show decade view (for easier year selection)
                todayHighlight: true // Highlight the current date
            });
        });
    </script>
    
</body>
</html>
