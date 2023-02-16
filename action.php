<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{    
    
    $fname = str_replace("'","`",$_POST['fname']);
    $lname = str_replace("'","`",$_POST['lname']);
    $email = str_replace("'","`",$_POST['mail']);
    $dob = str_replace("'","`",$_POST['dob']);
    
    $radioVal = $_POST["gender"];
    $password1 = str_replace("'","`",$_POST['pswrd1']);
    $password2 = str_replace("'","`",$_POST['pswrd2']);
    $query = "SELECT  * FROM registered where email='$email' AND password='$password1'";


    if($result = mysqli_query($conn,$query))
    {
        $rowcount = mysqli_num_rows( $result );
    }
    

    if (strcmp($password1,$password2)==0)
    {
        if($rowcount>=1)
        {
        Print '<script>alert("Student already exist");</script>';
        include('login.php');
        }
        else
        {

        
            $sql="insert into registered(fname,lname,email,dob,gender,password) 
             values('$fname','$lname','$email','$dob','$radioVal','$password1')"; 
            if(mysqli_query($conn,$sql))
            {
            Print '<script>alert("Student registered Successfully!!");</script>';
            include('index.php');
            } 
            else
            {
            echo "error:".mysqli_error($conn);
            } 
        }
    }
    else
    {
        Print '<script>alert("Password doesnot match!!!");</script>';
        include('signup.php');
    }
}
    
?>