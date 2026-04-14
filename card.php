<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي|منتجاتي</title>
    <style>
       main{
        width:70;
        margin-top:10px;
       }
       table{
        background-color:1px 1px 10px #583939;
       }
       thead{
        background:#FF810C;
        color:#FFFFFF;
        text-align:center;
       }
       tbody{
        text-align:center;
       }
    </style>
</head>
<body>
    <h3>
        <center>        
            منتجاتك المحجوزة

        </center>
    </h3>
<?php
include('config.php');
$result=mysqli_query($con,"SELECT * FROM addcard");
while($row=mysqli_fetch_array($result)){
    echo"
        <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Delete product</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>
                       
                    </tr>
                    
                </tbody>

            </table>
        </main>
    </center>
    ";
}
?>
<center>
<a href="index1.php">الرجوع الى صفحة المنتجات</a>
</center>
</body>
</html>