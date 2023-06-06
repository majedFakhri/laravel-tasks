<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<center>
    <h2>Products</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
            <td>add owner</td>
            <td>choose</td>
        </tr>
        @foreach($product as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td><a href="{{url('addOwnerToProduct/'.$row->id)}}">add Owner</a></td>
                <td > <a href="{{url('product/{$row->id}/edit')}}">edit</a>||<a href="{{route('product.destroy', $row->id)}}">delete</a></td>
             </tr>
        @endforeach
    </table>
    <a href="{{url('product/create')}}"><h3>add</h3></a>
    <a href="{{url('/')}}"><h3>Home Page</h3></a>
    <br><br>
</center>
</body>
</html>


