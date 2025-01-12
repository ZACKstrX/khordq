<div>
<table border="2">
  <thead>
    <th>first_name</th>
    <th>last_name</th>
    <th>birthday</th>
    <th>class</th>
    <th>sexe</th>
    <th>email</th>

  </thead>
    <tbody>
        @foreach ($cls as $client )
        <tr>
            <td>{{$client->first_name}}</td>         
            <td>{{$client->last_name}}</td>         
            <td>{{$client->birthday}}</td>         
            <td>{{$client->class}}</td>         
            <td>{{$client->sexe}}</td>         
            <td>{{$client->email}}</td>         
       </tr>
        @endforeach
    </tbody>
</table>
</div>
