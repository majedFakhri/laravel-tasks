<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<center>
    <h2>{{$family->name}} lands</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
            <td>production_quantity</td>
            <td>option</td>
        </tr>
        @foreach($land as $row)
            <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->production_quantity}}</td>
                <td>
                    <form action="{{route('land.edit',$row->id)}}" method="GET">
                        @csrf
                        <input type="submit" value="edit">
                    </form>
                    <form action="{{route('land.destroy', $row->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                   
                </td>
             </tr>
        @endforeach
    </table>
    <br><br>
    
    <a href="{{url('family')}}">back</a>

</center>
</body>
</html>


