<?php

include __DIR__.'/../fun.php';
$erMsg = [];





$posts = selectAll('posts');


if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['post-create'])){
   
    
    $title = trim($_POST['title']);
    $text = trim($_POST['text']);
    
    

    if($title === ''  || $text === ''  ){

       array_push($erMsg,"Не все поля заполнены!");
    }elseif(mb_strlen($title,'UTF8')<2){
        array_push($erMsg,"title должен быть более 2-х символов");
    }else{
        
      
            $post = [
                 'title'=>$title,
                 'text'=>$text
            ];

            $id = insert('posts',$post);

            header('Location: /admin/posts/index.php');
           
    }
}



  // get id

if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['id'])){

    $id = ($_GET['id']);
    $post = selectAll('posts',['id'=>$id]);
    if(empty($post)){
        $title = '';
        $text = '';
    }

}


//update

if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['post-update'])){

    $id = $_POST['id'];

    $title = trim($_POST['title']);
    $text = trim($_POST['text']);
    
    

    if($title === ''  || $text === ''  ){

       array_push($erMsg,"Не все поля заполнены!");
    }elseif(mb_strlen($title,'UTF8')<2){
        array_push($erMsg,"title должен быть более 2-х символов");
    }else{
        
      
            $post = [
                 'title'=>$title,
                 'text'=>$text
            ];

            update('posts',$id,$post);
            header('Location: /admin/posts/index.php');
}

}else{
    $title = '';
    $text = '';
    
}

?>