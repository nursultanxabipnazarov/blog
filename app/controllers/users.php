<?php

include __DIR__.'   /../fun.php';

 if(isset($_POST['reg'])){
 
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $password = password_hash($_POST['password'] ,PASSWORD_DEFAULT);
     $admin = 0;

    $user = [
        'admin'=>$admin,
         'fname'=>$fname,
         'lname'=>$lname,
         'email'=>$email,
         'password'=>$password

    ];
 
  test($user);

        $users = insert('users' , $user);
        test($users);
 }

?>