<!DOCTYPE html>
<html>
<head>
<title>Lands</title>
</head>
<body>
<form action="{{ route('land.update',$land->id)}}" method="Post">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name"  placeholder="land name " value="{{$land->name}}">
    <label>Production quantity</label>
    <input type="text" name="production_quantity"  placeholder="national number " value="{{$land->production_quantity}}">


    <label>plant name</label>
    <label >Choose a plant:</label>
    <select name="plants_id">
        @foreach($plant as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
     

    <button type="submit">Save</button>
</form>

</body>
</html>
