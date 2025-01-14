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
    <thead >
      <th  scope="col">first_name</th>
      <th  scope="col">last_name</th>
      <th  scope="col">birthday</th>
      <th  scope="col">class</th>
      <th  scope="col">gender</th>
      <th  scope="col">email</th>
      <th  scope="col">OPERATION</th>
      
  
    </thead>
      <tbody class="table-group-divider">
          @foreach ($cls as $client )
          <tr>
              <td  scope="row">{{$client->first_name}}</td>         
              <td>{{$client->last_name}}</td>         
              <td>{{$client->birthday}}</td>         
              <td>{{$client->class}}</td>         
              <td>
                  @if ($client->sexe == 1)
                  female
                  @else
                  male
                  @endif
              </td>      
              <td >{{$client->email}}</td>    
              <td class="d-flex justify-content-around gap-2">
                <a href={{url("/UpdatingProcess/".$client->id) }} class="btn btn-info ">Update</a> 
                <a href={{url("/DeleteClient/".$client->id) }} class="btn btn-danger">Delete</a></td>    
         </tr>
          @endforeach
      </tbody>
  </table>
  </div>
    
</body>
</html>








