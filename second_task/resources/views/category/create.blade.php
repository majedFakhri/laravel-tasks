

<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
</head>
<body>


<form action="{{ route('storeCategory')}}" method="POST">
    
@csrf
          <label >  Name</label>
          <input type="text" name="name"  placeholder="category name">
       
         


            <button type="submit" >Save</button>

        



    </form>

</body>
</html>


