<!DOCTYPE html>
<html>
<head>
<title>Families</title>
</head>
<body>
<form action="{{ route('land.store')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="land name">
    <label>Production Quantity</label>
    <input type="text" name="production_quantity"  placeholder="production quantity">
    <input type="text" name="families_id"  value="{{$family->id}}" hidden>


    <label>plant name</label>
    <label >Choose a plant:</label>
    <select name="plants_id">
        @foreach($plant as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
     

    <button type="submit">Save</button>
</form>
<a href="{{url('family')}}">back</a>
</body>
</html>
