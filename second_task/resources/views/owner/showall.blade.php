<!DOCTYPE html>
<html>
<head>
<title>Owners</title>
</head>
<body>
<center>
    <h2>Owners</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
            <td>add product</td>
            <td>choose</td>
        </tr>
        <tr>
            @foreach($owner as $row)
                <td>{{$row->name}}</td>
                <td><a href="{{url('addProductToOwner/'.$row->id)}}">add Product</a></td>
                <td > <a href="{{url('edit/'.$row->id)}}">edit</a>||<a href="{{url('deletefamily/'.$row->id)}}">delete</a></td>
        </tr>
            @endforeach
    </table>
    <a href="{{url('owner/create')}}"><h3>add</h3></a>
    <a href="{{url('/')}}"><h3>Home Page</h3></a>
    <br> <br>
</center>
</body>
</html>


