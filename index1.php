

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
            margin-right:10px
        }
        .card img{
            width:100%;
            height:190px;
        }
        main{
            width: 100%;
        }
        .navbar-brand{
            margin-left:70;
            text-decoration:none;
            color:white;
        }
        h3{
            color: #0D6D00;
            font-size:30px;
           
        }
        .navbar-brand{
            margin-left:70px;
            text-decoration:none;
            color:#6D3939;
        }
        .body{
            align: right;
        }
      
    </style>
<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};


?>

   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>



   <?php
      $select_user = mysqli_query($con, "SELECT * FROM users WHERE id = $user_id") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>

   <p>المستخدم الحالي : <span><?php echo $fetch_user['name']; ?></span> </p>
   <div class="flex">
      <a href="index1.php?logout=<?php echo $user_id; ?>" onclick="return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');" class="delete-btn">تسجيل الخروج</a>
   </div>
</head>
<body>
    <nav class="navebar navbar-dark bg-dark">
            <a id="aa" class="navbar-brand" href="card.php"> Mycard|عربتي</a>
    </nav>


   <center> 
        <h3>بـازار القـدس للبيــع المخفـض</h3>
   </center>
      <center> 
        <h3>ALGUDS FOR SALE</h3>
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
                    <a href='val.php? id=$row[id]' class='btn btn-success'>اضافة المنتج للعربة</a>
                </div>
            </div>
        </main>
        </center>
            ";
   }
   ?>

    
</body>
</html>