<!DOCTYPE html>
<html>
<head>
<title>Address</title>
</head>
<body>
<form action="{{ route('address.store')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="address name">



   
     

    <button type="submit">Save</button>
</form>
<a href="{{url('address')}}">back</a>
</body>
</html>
