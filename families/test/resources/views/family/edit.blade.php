<!DOCTYPE html>
<html>
<head>
<title>Families</title>
</head>
<body>
<form action="{{ route('family.update',$family->id)}}" method="Post">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name"  placeholder="family name " value="{{$family->name}}">
    <label>National Number</label>
    <input type="text" name="nationalNumber"  placeholder="national number " value="{{$family->nationalNumber}}">


    <label>address name</label>
    <label >Choose a address:</label>
    <select name="addresses_id">
        @foreach($address as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
     

    <button type="submit">Save</button>
</form>
<a href="{{url('family')}}">back</a>
</body>
</html>
