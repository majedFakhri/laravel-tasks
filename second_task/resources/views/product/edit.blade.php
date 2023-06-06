<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>


<form action="{{ url('product/{$product->id}')}}" method="PUT">
    
@csrf
          <label >  Name</label>
          <input type="text" name="name"  placeholder="product name" >
          <label >  Category name</label>
          <label >Choose a category:</label>
          
<select name="category"  multiple>
@foreach($category as $row)
  <option value="{{$row->id}}">{{$row->name}}</option>
  @endforeach
</select>


          <!-- <input type="int" name="category_name"  placeholder="category name" > -->


    
        <button type="submit" >Save</button>


    </form>

</body>
</html>