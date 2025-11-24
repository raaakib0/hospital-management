<!DOCTYPE html>
<html>
    <head>
        <title>Generics List</title>
    </head>
    <body>
        <h1>All Generic Data</h1>
        <table border="1" cellpadding="5" >
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Detail</th>
</tr>

@foreach ($generics as $generic)
<tr>
    <td>{{ $generic->id }}</td>
    <td>{{ $generic->name }}</td>
    <td>{{ $generic->detail }}</td>
</tr>
@endforeach
        </table>
    </body>
</html>