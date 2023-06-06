<!DOCTYPE html>
<html>
<head>
<title>Plants</title>
</head>
<body>
<form action="{{ route('plant.store')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="plant name">



   
     

    <button type="submit">Save</button>
</form>
<a href="{{url('plant')}}">back</a>
</body>
</html>
