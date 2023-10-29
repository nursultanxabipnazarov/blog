<?php
 include __DIR__."/../../app/fun.php";

 $categories = selectAll('categories');


 if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['id'])){

   $category_id = $_POST['id'];
   $sql = "SELECT * FROM posts INNER JOIN categories 
          ON posts.id_category=categories.id INNER JOIN users ON users.id=posts.user_id  WHERE posts.id_category = $category_id" ;
   $sql = $conn->prepare($sql);
   $sql -> execute();
   $rez = $sql->fetchAll();
   
   

 
   

 }
else{
       $rez = [];
}


?>