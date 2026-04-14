


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      input{
         text-align: center;
      }
      h3{
         color:#FFFFFF;
      }
      .body{
         align:left;
      }
      .contain{
        
         align:right;
         background-color:#000296;
         width:40%;
      }
      .logoi{
         display:flex;
         align:left;
      }
      p{
         text-color:white;
      }
      a{
         text-color:red;

      }
   </style>



</head>

<body>
   <?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index1.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>
<div class="contain">
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">
<br><center><h3>بـازار القـدس للتســوق</h3></center>


   <form action="" method="post">
      <center>
      
      <h3>تسجيل الدخول</h3>
      <input type="email" name="email" required placeholder="البريد الالكتروني" class="box"><br><br>
      <input type="password" name="password" required placeholder="كلمة المرور" class="box"><br><br>
      <input type="submit" name="submit" class="btn" value="تسجيل الدخول"><br>
      <p>هل تملك حساب بالفعل؟ <a href="register.php"> حساب جديد</a></p>
</center>
   </form>

</div>
</div>
<div class="logoi">      
   <img src="logo.png" alt="logo" width="200">
</div>
</body>
</html>