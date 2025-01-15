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

<div>
    <table class="table table-bordered border-black">
        <thead>
            <tr><th  scope="col">Restaurant Name</th>
                <th  scope="col">Speciality</th>
                <th  scope="col">Email</th>
                <th  scope="col">Location</th>
                <th  scope="col">Number</th>
                <th  scope="col">Operation</th></tr>
        </thead>
        <tbody  class="table-group-divider">
            @foreach ($data as $resturant)
                <tr>
                    <td>{{$resturant->resturant_name}}</td>
                    <td>{{$resturant->speciality}}</td>
                    <td>{{$resturant->email}}</td>
                    <td>{{$resturant->location}}</td>
                    <td>{{$resturant->number}}</td>
                    <td>
                        <a href={{url("/DeleteResturant/".$resturant->id) }} class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
