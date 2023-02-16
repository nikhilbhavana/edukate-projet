<?php

include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){    
$email = str_replace("'","`",$_POST['email']);
$password = str_replace("'","`",$_POST['pswrd']);
$query = "SELECT  * FROM registered where email='$email' AND password='$password'";

if($result = mysqli_query($conn,$query)){
    $rowcount = mysqli_num_rows( $result );

    }



  if($rowcount==1){
    Print '<script>alert("Student Login Sucessfull!!");</script>';
    include('index.php');
  }
  else{
    Print '<script>alert("incorrect email or password");</script>';
    include('login.php');

  }
}
?>