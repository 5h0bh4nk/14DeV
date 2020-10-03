<?php
session_start();
if(!isset($_SESSION['currentuser']))
header("location:index.php");
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
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		  <a class="navbar-brand navfont ml-5">Team 14</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active mr-md-5">
		        <button class="nav-link btn btn-warning dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['currentuser']?><span class="sr-only">(current)</span></button>
							
							    	<?php
							  			$user1=$_SESSION['currentuser'];
										$con1=mysqli_connect("localhost","root","","team14");
										$displayquery1="SELECT * FROM admininfo WHERE faculty_id='$user1'";
										$result1=mysqli_query($con1,$displayquery1);
										$result2=mysqli_fetch_array($result1);
										?>
							<div class="dropdown">
							  <div class="dropdown-menu p-0">
							    <span class="dropdown-item-text text-center mt-4"> <?php echo $result2['name']; ?>
							    	<button class="btn-danger btn-block text-white  rounded" data-toggle="modal" data-target="#myModal1" type="button">Edit Name</button>
							    </span>
							    <span class="dropdown-item-text text-center">
							    	<button class="btn-danger  text-white  rounded" data-toggle="modal" data-target="#myModal2" type="button">Reset Password</button>
							    </span>
							  </div>
							</div>
		      </li>
		      <li class="nav-item mr-md-5">
		        <a class="nav-link btn btn-danger rounded text-white" href="logout.php">Logout</a>
		      </li>
		    </ul>
		  </div>
	</nav>
</header>
<main>
			 <!-- edit name modal start -->
							    		<div class="modal" id="myModal1">
											  <div class="modal-dialog modal-dialog-centered ">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h4 class="modal-title ">Edit Name</h4>
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											      </div>
											      <div class="modal-body">
											      	<div class="container">
												        <form method="post" action="delete.php">
												        <div class="form-group">
															 <label for="changename">Name: </label>
															 <input type="text" class="form-control bg-dark text-white" id="changename" placeholder="New Name" name="changename" required>
														</div>									
												      	<div class="form-group text-right">
										    				<button type="submit" class="btn-success btn-block text-white p-1 rounded" name="name_edit_admin">Change</button>
										  				</div>
												      </form>
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											      </div>

											    </div>
											  </div>
										</div>
									</div>
				<!-- edit name modal End -->

				<!-- Reset Password modal start -->
							    		<div class="modal" id="myModal2">
											  <div class="modal-dialog modal-dialog-centered ">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h4 class="modal-title ">Reset Password</h4>
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											      </div>
											      <div class="modal-body">
											      	<div class="container">
												        <form method="post" action="delete.php">
												        <div class="form-group">
															 <label for="changename">New Password: </label>
															 <input type="text" class="form-control bg-dark text-white" id="changepwd" placeholder="New Password" name="changepwd" required>
														</div>									
												      	<div class="form-group text-right">
										    				<button type="submit" class="btn-success btn-block text-white p-1 rounded" name="pwd_edit_admin">Change</button>
										  				</div>
												      </form>
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											      </div>

											    </div>
											  </div>
										</div>
									</div>
				<!-- Reset Password modal End -->
				
					
				<div class="container-fluid">
					<div class="container mt-5">
													<div class="dropdown">
								<button class="nav-link btn btn-primary dropdown-toggle" data-toggle="dropdown">Filter</button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item-text" href="#">category</a>
							    <a class="dropdown-item-text" href="#">status</a>
							  </div>
							</div>
				 <table class="table table-dark table-bordered table-striped">
				    <thead class="text-center">
				      <tr>
				        <th>File Name</th>
				        <th>Category</th>
				        <th>Verification Status</th>
				        <th colspan="4">Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    		<?php
				    				
				    				$user=$_SESSION['currentuser'];
									$con=mysqli_connect("localhost","root","","team14");
									$displayquery="SELECT * FROM adminfiles";
									$querydisplay=mysqli_query($con,$displayquery);
									while ($result=mysqli_fetch_array($querydisplay)) 
									{
							 ?>
								            <tr>
								            	<td class="text-center"><?php echo $result['filename'] ?></td>
								            	<td class="text-center"><?php echo $result['category'] ?></td>
								            	<td class="text-center"><?php echo $result['status'] ?></td>
								            	<td class="text-center">
								            		<form method="post" action="adminaccess.php">
								            			<input type="hidden" name="<?php echo $result['location'] ?>">
								            			<button class="btn-primary text-white p-1 rounded" name="adminview" type="submit" value="<?php echo $result['filename']?>">view</button></form>
								            	</td>
								            	<td>	
								            		<form method="post" action="adminaccess.php"><button class="btn-success text-white p-1 rounded" name="adminaccept" type="submit" value="<?php echo $result['filename'].$result['regis']; ?>">accept</button></form>
								            	</td>
								            	<td>
								            		<form method="post" action="#"><button class="btn-warning text-white p-1 rounded" name="del" type="submit" value="<?php echo $result['filename']; ?>">Reject</button></form>
								            	</td>
								            	<td>	
								            		<form method="post" action="delete.php"><button class="btn-danger text-white p-1 rounded" name="deladmin" type="submit" value="<?php echo $result['filename']; ?>">Delete</button></form>
								            	</td>
								            </tr>
							<?php
									}
							?>
    				</tbody>
  			     </table>
			</div>
					
				</div>	
</main>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>