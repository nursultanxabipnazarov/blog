<?php
session_start();
include __DIR__.'/../fun.php';
$erMsg = [];


$posts = selectAll('posts');


if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['post-create'])){
   
   if(!empty($_FILES['img']['name'])){
    $imgName = $_FILES['img']['name'];
    $fileType = $_FILES['img']['type'];
    $tmpName = $_FILES['img']['tmp_name'];
    $pathFile = __DIR__.'/../../img/post/'.$imgName;
     move_uploaded_file($tmpName,$pathFile);
   
   }
   

    $title = trim($_POST['title']);
    $text = trim($_POST['text']);
    $id_category = $_POST['category'];
    
    

    if($title === ''  || $text === ''  ){

       array_push($erMsg,"Не все поля заполнены!");
    }elseif(mb_strlen($title,'UTF8')<2){
        array_push($erMsg,"title должен быть более 2-х символов");
    }else{
        
      
            $post = [
                'user_id'=>$_SESSION['id'],
                 'title'=>$title,
                 'img'=>$imgName,
                 'text'=>$text,
                 'id_category'=>$id_category

            ];
            
            $id = insert('posts',$post);

            header('Location: /admin/posts/index.php');
           
    }
}



  // get id

if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['id'])){

    $id = ($_GET['id']);
    $post = selectAll('posts',['id'=>$id]);
    

}else{

}


//update

if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['post-update'])){

    $id = $_POST['id'];


    if(!empty($_FILES['img']['name'])){
        $imgName = $_FILES['img']['name'];
        $fileType = $_FILES['img']['type'];
        $tmpName = $_FILES['img']['tmp_name'];
        $pathFile = __DIR__.'/../../img/post/'.$imgName;

        
        $allowed =  array('jpeg','jpg', "png");
        $ext = pathinfo($imgName, PATHINFO_EXTENSION);
        if(in_array($ext,$allowed)){

         move_uploaded_file($tmpName,$pathFile);

        }else{
            array_push($erMsg,"Ruxsat etilmegen fayl juklediniz  ruxsat etilgen fayllar jpg ,jpeg,png ");
        }
       
       }else{
        array_push($erMsg,"Image qosin!");
       }
       
    
        $title = trim($_POST['title']);
        $text = trim($_POST['text']);
        $id_category = $_POST['category'];
    

    if($title === ''  || $text === ''  ){

       array_push($erMsg,"Не все поля заполнены!");
    }elseif(mb_strlen($title,'UTF8')<2){
        array_push($erMsg,"title должен быть более 2-х символов");
    }else{
        
      
        $post = [
             'title'=>$title,
             'img'=>$imgName,
             'text'=>$text,
             'id_category'=>$id_category

        ];
        

            update('posts',$id,$post);
            header('Location: /admin/posts/index.php');
}

}else{

   
    
}


$categories = selectAll('categories');

if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['destroy'])){

    $id = ($_GET['destroy']);
    delete('posts',$id);
    header('Location: /admin/posts/index.php');
    

}


?>