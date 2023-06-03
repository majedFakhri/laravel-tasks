

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>


<form action="{{ route('storeProduct')}}" method="POST">
    
@csrf
          <label >  Name</label>
          <input type="text" name="name"  placeholder="product name">
          <label >  Category Id</label>
          <input type="int" name="category_id"  placeholder="category id">
       
         


            <button type="submit" >Save</button>

        



    </form>

</body>
</html>


