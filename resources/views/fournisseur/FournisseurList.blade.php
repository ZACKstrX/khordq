<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <table border="1">
        <thead>
            <tr><th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>age</th>
                <th>email</th>
                <th>password</th></tr>
        </thead>
        <tbody>
            @foreach ($four as $fournisseur)
                <tr>
                    <td>{{$fournisseur->first_name}}</td>
                    <td>{{$fournisseur->last_name}}</td>
                    <td>{{$fournisseur->phone_number}}</td>
                    <td>{{$fournisseur->age}}</td>
                    <td>{{$fournisseur->email}}</td>
                    <td>{{$fournisseur->password}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>
