<?php
if(isset($_POST['adminview']))
{
$filename=$_POST['adminview'];
$k="userdoc/".$filename;

$con=mysqli_connect("localhost","root","","team14");
$displayquery="select * from adminfiles where location='$k'";
$querydisplay=mysqli_query($con,$displayquery);
$result=mysqli_fetch_array($querydisplay);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TEAM-14</title>
</head>
<body>
<div class="container-fluid">
	<form action="admin.php">
	<button class="btn-danger">close</button>
    </form>
	<div class="container">
		<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $result['location'] ?>" allowfullscreen></iframe>
</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['adminaccept']))
{
	$con=mysqli_connect("localhost","root","","team14");
	$filename=$_POST['adminaccept'];
	$ar=(explode(".",$filename));
	$file=$ar[0].'%';
	$regis=$ar[1];
	$query="update userfiles set status='verified' where regis='$regis' and filename like '$file'";
	$query1="update adminfiles set status='verified' where regis='$regis' and filename like '$file'";
	if(!mysqli_query($con,$query))
		echo mysqli_error($con);
	if(!mysqli_query($con,$query1))
		echo mysqli_error($con);
	header("location:admin.php");
}
?>