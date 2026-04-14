<!DOCTYPE html>
<html lang="en">
<head>
    <https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products| المنتجات </title>
    <link rel="stylesheet"  href="index.css">
    <style>
        .card{
            float:right;
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
        }
        .card img{
            width:100%;
            height:190px;
            padding:2px;
      
          
       
        }
        main{
            width:90%;
           
        }
   
    </style>
</head>
<body>
   <center> 
        <h3>لوحة الادمن</h3>
   </center>
   <br>
   <?php
   include('config.php');
   $result=mysqli_query($con, "SELECT * FROM prod");
   while($row=mysqli_fetch_array($result)){
        echo"
        <center>
        <main>
            <div class='card' style='width:15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <P class='card-text'>$row[price]</p>
                    <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف المنتج</a>
                    <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل المنتج</a>
                </div>
            </div>
        </main>
        </center>
            ";
   }
   ?>

    
</body>
</html>