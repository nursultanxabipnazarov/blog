<?php
session_start();

include __DIR__.'   /../fun.php';
include __DIR__.'../../../path.php';

$erMsg = [];


function Auth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login']=$user['email'];
    $_SESSION['admin'] =$user['admin'];
    header('loction: '.BASE_URL);
   

}



if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['reg'])){
   
        $admin = 0;
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);

        if($fname === ''  || $lname === '' || $email === '' || $password === '' ){

           array_push($erMsg,"Не все поля заполнены!");
        }elseif(mb_strlen($email,'UTF8')<2){
            array_push($erMsg,"email должен быть более 2-х символов");
        }elseif($password !== $password2){
            array_push($erMsg,"parol qate !");
        }else{
            $existence = selectAll('users',['email'=>$email]);
            if($existence[0]['email']===$email){
                array_push($erMsg,"Пользователь с такой почтой уже зарегистрирован!");
            }else{
                $pass = password_hash($password,PASSWORD_DEFAULT);
                $user = [

                     
                     'fname'=>$fname,
                     'lname'=>$lname,
                     'email'=>$email,
                     'password'=>$pass,
                     'admin'=>$admin
            
                ];

                $id = insert('users',$user);
                
                 $user = selectAll('users',['id'=>$id]);
                 

                $_SESSION['id'] = $user[0]['id'];
                $_SESSION['fname']=$user[0]['fname'];
                $_SESSION['admin'] = $user[0]['admin'];
                //test($_SESSION);
                header('Location: /index.php');
               
        }
    }
      
       
    }else{

        $fname = '';
        $lname = '';
        $erMsg = [];
}



if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['log'])){

    $login = $_POST['email'];
    $password = $_POST['password'];

    if($login === '' || $password === ''){
         array_push($erMsg,'Не все поля заполнены!!');

    }else{
        $existence = selectAll('users',['email'=>$login]);
        if(empty($existence)){
            array_push($erMsg,"Bunday user joq!");

        }

           elseif( $existence[0]['email']=== $login && password_verify($password,$existence[0]['password'])){

            $_SESSION['id'] = $existence[0]['id'];
            $_SESSION['fname']=$existence[0]['fname'];
            $_SESSION['admin'] = $existence[0]['admin'];
            
            if($_SESSION['admin']){
                header('Location: /admin/admin.php');
            }
            else{
                header('Location: /index.php');

            }
            

        }
        else{
            array_push($erMsg,"Parol yaki login qate");
        }
    }

}else{
    $login = '';
}

 

?>