<?php
include __DIR__.'/../../app/controllers/posts.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">

    title <input type="text" name = "title"><br>
    kategoriya <input type="text" name = "cate"><br>
     text<input type="text" name = "text"><br>
     <input type="submit" name = "post-create" value="OK"> 

     </form>
</body>
</html>