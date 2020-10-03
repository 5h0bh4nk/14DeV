<?php
  require_once 'connection.php';
  $fullname=$_POST['Name'];
  $regis=$_POST['reginumber'];
  $contact=$_POST['contactnumber'];
  $stu_course=$_POST['course'];
  $pwd=$_POST['pass'];
  
    $search="select * from userinfo where registration_num ='$regis'";
    $result=mysqli_query($con,$search);
    $count  = mysqli_num_rows($result);
     if($count==0)
     {
  	 $insertquery="insert into userinfo(name,registration_num,contactnum,course,password)values('$fullname','$regis','$contact','$stu_course','$pwd')";
     if(!mysqli_query($con,$insertquery))
     	echo mysqli_error($con);
     else
     {
     	header("location:index.php");
     }
   }
   else
    {
      echo '<script>
               alert("user already exists!!!");
               location.href="index.php";
            </script>';
    }
?>