<?php
require '../app/database/conn.php';
 function test($data){

     echo "<pre>";
     print_r($data);
     echo "</pre>";

 }



 function insert($table , $param = []){

     global $conn;
     $coll = '';
     $row = '';
    $i = 0;
     foreach ($param as $key => $value) {
        if($i==0){

            $coll = $coll." $key ";
            $row = $row."'". " $value "."'";
        }else{
            $coll = $coll.", $key ";
            $row = $row.", '". "$value"."'";
        }
        
        $i++;
        
     }
     
     $sql = "INSERT INTO $table ($coll) VALUES ($row)";
     $sql = $conn->prepare($sql);
     $sql->execute();
     return $conn->lastInsertId();
     




 }




 function selectAll($table,$param = []){
     global $conn;
     $sql = "SELECT * FROM $table";
     $sql = $conn->prepare($sql);
     $sql->execute();

      return $sql->fetchAll();


 }

 $data = [
    'title'=>'Nursuiltan',
    'text'=>'nursultanxabipnazar@gmail.com',
    'img'=>"photo.jpg"
 ];

 $post = insert('posts',$data);
  
 $data = selectAll('posts');
 test($data);


?>