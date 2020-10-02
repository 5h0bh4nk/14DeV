<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
  echo mysqli_error($con);
}
else
{
	$query="CREATE DATABASE IF NOT EXISTS team14";
	if(!mysqli_query($con,$query))
		echo mysqli_error($con);
	else{
		$con=mysqli_connect("localhost","root","","team14");
		   mysqli_select_db($con,"team14");
		$usertable="CREATE TABLE IF NOT EXISTS userinfo(name varchar(255),registration_num varchar(7) primary key,contactnum varchar(255),course varchar(255),password varchar(255))";
		$admintable="CREATE TABLE IF NOT EXISTS admininfo(name varchar(255),faculty_id varchar(10) primary key,branch varchar(255),contactnum varchar(255),password varchar(255))";
		if(!mysqli_query($con,$usertable))
			echo mysqli_error($con);
		if(!mysqli_query($con,$admintable))
			echo mysqli_error($con);
	}
}
?>