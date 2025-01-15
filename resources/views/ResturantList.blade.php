<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
 
    <table border="1">
        <thead>
            <tr><th>Restaurant Name</th>
                <th>Speciality</th>
                <th>Email</th>
                <th>Location</th>
                <th>Number</th></tr>
        </thead>
        <tbody>
            @foreach ($data as $resturant)
                <tr>
                    <td>{{$resturant->resturant_name}}</td>
                    <td>{{$resturant->speciality}}</td>
                    <td>{{$resturant->email}}</td>
                    <td>{{$resturant->location}}</td>
                    <td>{{$resturant->number}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
