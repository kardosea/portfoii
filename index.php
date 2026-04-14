<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online |اضافة منتجات </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <brr><br><h2>موقع تسويقي اونلاين</h2>
                <img src="logo.png" alt="logo" width="200">
                <br>
                <input type="text" name='name'>
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">اختيار صورة المنتج</label>
             
                <button name='upload'> رفع المنتج</button>
                <br>
                <br>
                <a href="products.php">عرض كل المنتجات</a>
                <br>
                <a href="products.php"></a>

            </form>
        </div>
        <p>ابايزيد حمدالنيل_________________________Abayazeed Hamadelnile</p>
    </center>
</body>
</html>