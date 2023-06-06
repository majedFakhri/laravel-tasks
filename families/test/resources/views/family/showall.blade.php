<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<center>
    <h2>Families</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
          
            <td>option</td>
        </tr>
        @foreach($family as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>
                    <form action="{{route('family.edit',$row->id)}}" method="GET">
                        @csrf
                        <input type="submit" value="edit">
                    </form>
                    <form action="{{route('family.destroy', $row->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                    <form action="{{url('addLandToFamily/'.$row->id)}}" method="GET">
                        @csrf 
                        <input type="submit" value="add land">
                    </form>    
                    <form action="{{url('showFamilyLands/'.$row->id)}}" method="GET">
                        @csrf 
                        <input type="submit" value="show lands">
                    </form>
                </td>
             </tr>
        @endforeach
    </table>
    <a href="{{url('family/create')}}"><h3>add</h3></a>
    <br><br>
    <a href="{{url('/')}}"><h3>homePage</h3></a>

</center>
</body>
</html>


