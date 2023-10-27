

<?php
include __DIR__."/../../app/fun.php";


$erMsg = [];

// Categories get all

$categories = selectAll('categories');




// Categories Insert

if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['category-create'])){
   
    
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    
    

    if($name === ''  || $description === ''  ){

       array_push($erMsg,"Не все поля заполнены!");
    }elseif(mb_strlen($name,'UTF8')<2){
        array_push($erMsg,"Name должен быть более 2-х символов");
    }else{
        
      
            $post = [
                 'name'=>$name,
                 'description'=>$description
            ];

            $id = insert('categories',$post);

            header('Location: /admin/categories/index.php');
           
    }
}





  // get id

  if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['id'])){

    $id = ($_GET['id']);
    $category = selectAll('categories',['id'=>$id]);
 
}




//update

if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['category-update'])){


    $id = $_POST['id'];

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    
    

    if($name === ''  || $description === ''  ){

       array_push($erMsg,"Не все поля заполнены!");
    }elseif(mb_strlen($name,'UTF8')<2){
        array_push($erMsg,"Name должен быть более 2-х символов");
    }else{
        
      
            $category = [
               'name'=>$name,
               'description'=>$description
            ];

            update('categories',$id,$category);
            header('Location: /admin/categories/index.php');
}

}else{
    $title = '';
    $text = '';
    
}


//delete


if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['destroy'])){

    $id = ($_GET['destroy']);
   delete('categories',$id);
   header('Location: /admin/categories/index.php');
   
 
}







?>