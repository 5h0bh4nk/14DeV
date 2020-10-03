<?php
  require_once 'connection.php';
  $ctg=$_POST['category'];
  /*************files essentials*************/
  $files=$_FILES['doc'];
  $filename=$files['name'];
  $tempstorelocation=$files['tmp_name'];
  $fileextension=explode('.',$filename);
  $filecheck=strtolower(end($fileextension));
  $fileextensionarray=array('pdf');
  /*******************************************/

   if(!in_array($filecheck,$fileextensionarray))
   {
   	 echo '<script>alert("The upoaded file type is not supported. supported file types:- PDF.");
   	 		 location.href="user.php";
   	 </script>';
   }
   else
   {
   	session_start();
   	$curuser=$_SESSION['currentuser'];
   	$status="pending";
   	$destinationfolder='userdoc/'.$filename;
   	move_uploaded_file($tempstorelocation,$destinationfolder);
    $getu="select name from userinfo where registration_num='$curuser'";
    $getuse=mysqli_query($con,$getu);
    $result2=mysqli_fetch_array($getuse);
    $getuser=$result2['name'];
  	$insertquery="insert into userfiles(regis,filename,category,status,location)values('$curuser','$filename','$ctg','$status','$destinationfolder')";
     if(!mysqli_query($con,$insertquery))
     {
     	echo mysqli_error($con);
     }
     else
     {
      $insertquery2="insert into adminfiles(user_name,regis,filename,category,status,location)values('$getuser','$curuser','$filename','$ctg','$status',
      '$destinationfolder')";
      if(mysqli_query($con,$insertquery2))
     	header("location:user.php");
     else
      echo mysqli_error($con);
     }
 }
?>