

<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
</head>
<body>



<center>
  
    <h2>Categories</h2>
    
    <br> <br>  
    <table border=1>
     
        <tr>
    
        <td>Name</td>
        
           
        
        </tr>
           <tr>
            <?php foreach($category as $row){?>
           <td><?php echo $row->name;?></td>
           
           

           <!-- <td > <a href="edit/<?php echo $row->id;?>">  edit </a>||
            <a href="deletefamily/<?php echo $row->id;?>">  delet </a> </td> -->
             
            
             </tr>
             <?php }?>
             </table>
          
             <a href="addCategory"> <h3> add  </h3></a>  
             <a href="/"> <h3> Home Page  </h3></a>  

    
    <br> <br>  
    
    </center>
    

</body>
</html>


