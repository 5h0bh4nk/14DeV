<?php
  require_once 'connection.php';
  $fullname=$_POST['Name'];
  $regis=$_POST['faculty_id'];
  $contact=$_POST['contactnumber'];
  $branch=$_POST['branch'];
  $pwd=$_POST['pass'];

     $search="select * from admininfo where faculty_id ='$regis'";
     $result=mysqli_query($con,$search);
    $count  = mysqli_num_rows($result);
     if($count==0)
     {
  	 $insertquery="insert into admininfo(name,faculty_id,branch,contactnum,password)values('$fullname','$regis','$branch','$contact','$pwd')";
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