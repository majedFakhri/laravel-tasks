

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>


<form action="{{ route('store')}}" method="POST">
    
@csrf
          <label >  Name</label>
          <input type="text" name="name"  placeholder="product name">
       
            <label >  Description</label>
            <input type="text" name="description" placeholder="product description">
         


            <button type="submit" >Save</button>

        



    </form>

</body>
</html>


