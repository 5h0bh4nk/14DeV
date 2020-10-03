<?php
if(isset($_POST['adminaccept']))
{
	$filename=$_POST['adminaccept'];
	$ar=(explode(".",$filename));
	$file=$ar[0];
	$regis=$ar[1];
	$query="update userfiles set status='verified' where regis='$regis' and filename like '$file %'";
	$query1="update adminfiles set status='verified' where regis='$regis' and filename like '$file %'";
	if(!mysqli_query($con,$query))
		echo mysqli_error($con);
	if(!mysqli_query($con,$query1))
		echo mysqli_error($con);
}
?>