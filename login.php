<?php
session_start();

$con=mysqli_connect("localhost","root","","team14");
if(isset($_POST['userlogin']))
{
$user=$_POST['Reg_No'];
$pass=$_POST['pwd'];
if(!isset($_SESSION['$user']))
{
   $verify="select * from userinfo where registration_num='$user' and password='$pass'";
   $result=mysqli_query($con,$verify);
   $count  = mysqli_num_rows($result);
	if($count==0){
	 echo '<script>
               alert("Login Failed!");
               location.href="index.php";
            </script>';
	}
   else
   {
   	  $_SESSION['currentuser']=$user;
     echo '<script>
               alert("Login Successfully!");
            </script>';
   }
}
}
else if(isset($_POST['adminlogin']))
{
	$user=$_POST['Reg_No'];
	$pass=$_POST['pwd'];
	if(!isset($_SESSION['$user']))
	{
   	$verify="select * from admininfo where faculty_id='$user' and password='$pass'";
   	$result=mysqli_query($con,$verify);
   	$count  = mysqli_num_rows($result);
	if($count==0)
   	 echo '<script>
               alert("Login Failed!");
               location.href="index.php";
            </script>';
    }
   else
   {
   	$_SESSION['currentuser']=$user;
    echo '<script>
               alert("Login Successfully!");
            </script>';
    }
}
mysqli_close($con);
?>