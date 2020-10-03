<?php
session_start();
$regis=$_SESSION['currentuser'];
$con=mysqli_connect("localhost","root","","team14");
if(isset($_POST['del']))
{
$filename=$_POST['del'];
$query="delete from userfiles where filename='$filename' and regis='$regis'";
if(mysqli_query($con,$query))
	header("location:user.php");
else
	echo mysqli_error($con);
}
else if(isset($_POST['deladmin']))
{
$filename=$_POST['deladmin'];
$query="delete from adminfiles where filename='$filename'";
if(mysqli_query($con,$query))
	header("location:admin.php");
else
	echo mysqli_error($con);
}

else if(isset($_POST['name_edit']))
{
  $newname=$_POST['changename'];
  $change="update userinfo set name='$newname' where registration_num='$regis'";
  if(mysqli_query($con,$change))
	header("location:user.php");
  else
	echo mysqli_error($con);
}

else if(isset($_POST['pwd_edit']))
{
  $newpwd=$_POST['changepwd'];
  $change="update userinfo set password='$newpwd' where registration_num='$regis'";
  if(mysqli_query($con,$change))
  {

	$to = 'vermanikunj81@gmail.com';
$subject = 'pwd changed for user with id'.$regis;
 $message='hello Nikunj';
    if(mail($to, $subject, $message))
	header("location:user.php");
  }
  else
	echo mysqli_error($con);
}
else if(isset($_POST['name_edit_admin']))
{
  $newname=$_POST['changename'];
  $change="update admininfo set name='$newname' where faculty_id='$regis'";
  if(mysqli_query($con,$change))
	header("location:admin.php");
  else
	echo mysqli_error($con);
}
else if(isset($_POST['pwd_edit_admin']))
{
  $newpwd=$_POST['changepwd'];
  $change="update admininfo set password='$newpwd' where faculty_id='$regis'";
  if(mysqli_query($con,$change))
  {
	$to = 'vermanikunj81@gmail.com';
$subject = 'pwd changed for admin with id '.$regis;
 $message='hello Nikunj';
    if(mail($to, $subject, $message))
	header("location:admin.php"); 
  }
  else
	echo mysqli_error($con);
}
?>
