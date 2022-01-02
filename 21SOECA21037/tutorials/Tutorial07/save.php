<?php
  session_start();  
  if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
  {
       $user = $_POST['username'];
       $pass = $_POST['password'];
       $rememberme=isset($_POST['rememberme'])?true:false;
       if(($user=='riddhi@gmail.com')&&($pass=='12345678')){
           if($rememberme)
           {
               setcookie('username',$user,time()+120);
               setcookie('password',$pass,time()+120);
           }
           else
           {
               setcookie('username',$user,time());
               setcookie('password',$pass,time());
           }
           $_SESSION['username']=$user;
           header("location:index.php");
       }       
       else
       {
           header("location:loginpage.php");
       }
}
 ?>
