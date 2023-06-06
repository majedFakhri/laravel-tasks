<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<center>
    <h2>Addresses</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
          
            <td>option</td>
        </tr>
        @foreach($address as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>
                   
                    <form action="{{route('address.destroy', $row->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <input type="submit" value="delete">
                   
                </td>
             </tr>
        @endforeach
    </table>
    <a href="{{url('address/create')}}"><h3>add</h3></a>
    <br><br>
    <a href="{{url('/')}}"><h3>homePage</h3></a>
</center>
</body>
</html>


