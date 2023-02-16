<?php
include('config.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){    
    $email = str_replace("'","`",$_POST['email']);
    $course= str_replace("'","`",$_POST['course_name' ]);
    $query = "SELECT  * FROM registered where email='$email'";
    $query1 = "SELECT  * FROM enrolled where email='$email' AND course_name='$course'";
    $query2 = "SELECT  * FROM course where  course_name='$course'";
    if($result = mysqli_query($conn,$query))
    {
        $rowcount = mysqli_num_rows( $result );
    }
    if($result1 = mysqli_query($conn,$query1))
    {
        $rowcount1 = mysqli_num_rows( $result1 );
    }
    if($result2 = mysqli_query($conn,$query2))
    {
        $rowcount2 = mysqli_num_rows( $result2 );
    }
    if($rowcount<1){
        Print '<script>alert("Student does not exist");</script>';
        include('enroll.php');
    }
    else{
        if($rowcount1>=1){
            Print '<script>alert("already registered to this course select different course");</script>';
            include('enroll.php');
        }
        else{
            while ($row = mysqli_fetch_row($result)){
                $student_fname=$row[1];
                $student_lname=$row[2];    
            }
            
            while ($row2 = mysqli_fetch_row($result2)){
                $course_id=$row2[0];    
                $course_name=$row2[1];
            }
            $sql="insert into enrolled(student_Fname,student_Lname,email,course_id,course_name) 
             values('$student_fname','$student_lname','$email','$course_id','$course_name')"; 
            if(mysqli_query($conn,$sql))
            {
            Print '<script>alert("joined to course Successfully!!");</script>';
            include('index.php');
            } 
            else
            {
            echo "error:".mysqli_error($conn);
            } 

        }

    }
    
    
    
    
    
}    
?>