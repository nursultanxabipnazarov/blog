<?php

include __DIR__.'   /../fun.php';


if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST['reg'])){
    $erMsg = [];
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
            $existence = selectOne('users',['email'=>$email]);
            if($existence['email']===$email){
                array_push($erMsg,"Пользователь с такой почтой уже зарегистрирован!");
            }else{
                $pass = password_hash($password,PASSWORD_DEFAULT);
                $user = [
                    'admin'=>$admin,
                     'fname'=>$fname,
                     'lname'=>$lname,
                     'email'=>$email,
                     'password'=>$pass,
            
                ];

                $id = insert('users',$user);
                test($id);
            }
        }


       
      
       
}else

{

    echo "GET";
}

 

?>