<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<form action="{{ route('product.store')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="product name">
    <label>Category Id</label>
    <input type="int" name="category_id"  placeholder="Category id">
    <button type="submit">Save</button>
</form>
<a href="{{url('product')}}">back</a>
</body>
</html>


