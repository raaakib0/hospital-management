<!DOCTYPE html>
<html>

<head>
    <title>Brand List</title>
</head>

<body>
    <h1>All Brand List</h1>
    <table border="1" cellpading="5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
@foreach ($brands as $brand )
    
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->price }}</td>
        </tr>
@endforeach

    </table>
</body>

</html>
