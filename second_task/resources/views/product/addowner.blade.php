

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>


<form action="{{ route('storeOwnerToProduct')}}" method="POST">
    add owner to <?php echo $product->name.$product->id;?>
    <br>
@csrf
          <label >  Owner Id</label>
          <input type="int" name="owner_id"  placeholder="owner id">
          <input type="int" name="product_id" value='<?php echo $product->id;?>' hidden >
          
       
         


            <button type="submit" >Save</button>

        



    </form>

</body>
</html>


