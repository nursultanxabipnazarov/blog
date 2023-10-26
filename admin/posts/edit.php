<?php
include __DIR__.'/../../app/controllers/posts.php';

$id = $_GET['id'];

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
        
    <input type="hidden" name="id" value="

    <?php if(!empty($post)){
        echo $post[0]['id'];
       }   ?> " >
    title <input type="text" name = "title" value="

<?php if(!empty($post)){
    echo $post[0]['title'];
   }   ?> " ><br>
    text <input type="text" name = "text" value="

<?php if(!empty($post)){
    echo $post[0]['text'];
   }   ?> "><br>
     <input type="submit" name = "post-update" value="OK"> 

     </form>
</body>
</html>