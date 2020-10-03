<?php
session_start();
if(isset($_SESSION['currentuser']))
header("location:user.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TEAM-14</title>
</head>
<body>
 <div class="container-fluid  vh-auto p-5">
 	<div class="container p-5 mt-3 ">
 	 <div class="row">
 		<div class="col-sm-12 col-lg-6 align-content-center">
 			    <img src="images/nitw.jpg" class="img-fluid mt-5 p-md-5">
 			    <hr class="w-75 mt-2">
 			    <h3 class="text-center mt-5 ">Already a user?</h3>
				<button class="btn-danger rounded text-white btn-block p-2 mt-md-5" data-toggle="modal" data-target="#ModalCenter">Login</button>
            <!-- ----------------------------------------- -->
        </div>  
            <!-- ----------------------------------------- -->
			<!--Login Modal -->
						<div class="modal fade bg-danger" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content ">
						      <div class="modal-header text-danger">
						        <h5 class="modal-title" id="ModalLongTitle">Login</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
							                  <nav>
							                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
							                      <a class="nav-item nav-link active text-dark" id="nav-home-tab" data-toggle="tab" href="#nav-user" role="tab" aria-controls="nav-user" aria-selected="true">User</a>
							                      <a class="nav-item nav-link text-danger" id="nav-profile-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">Admin</a>
							                    </div>
							                  </nav>
							                  <div class="tab-content" id="nav-tabContent">
							                    <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-home-tab">
							                      <div class="container">
																  <form action="login.php" method="post" class="was-validated">
																   
																    <div class="form-group">
																      <label for="reginumber">Registration Number:-</label>
																      <input type="text" class="form-control" id="reginumber" placeholder="Registration number" name="Reg_No" required>
																      <div class="valid-feedback">Valid.</div>
																      <div class="invalid-feedback">Please fill out this field.</div>
																    </div>
																   
																    <div class="form-group">
																      <label >Password</label>
																      <input type="Password" class="form-control" id="pwd" placeholder="Password" name="pwd" required minlength="7">
																      <div class="valid-feedback">Valid.</div>
																      <div class="invalid-feedback">Please fill out this field.</div>
																    </div>

																    <div class="form-group text-center">
																    	<button type="submit" class="btn btn-danger w-50" name="userlogin">Login</button>
																  	</div>
																  </form>
											</div>
							                    </div>
							                    <div class="tab-pane fade " id="nav-admin" role="tabpanel" aria-labelledby="nav-home-tab">
							                     	 <div class="container">
																  <form action="login.php" method="post" class="was-validated">
																   
																    <div class="form-group">
																      <label for="admin_id">Admin Id:-</label>
																      <input type="text" class="form-control" id="admin_id" placeholder="Admin_id" name="Reg_No" required>
																      <div class="valid-feedback">Valid.</div>
																      <div class="invalid-feedback">Please fill out this field.</div>
																    </div>
																   
																    <div class="form-group">
																      <label >Password</label>
																      <input type="Password" class="form-control" id="pwd" placeholder="Password" name="pwd" required minlength="7">
																      <div class="valid-feedback">Valid.</div>
																      <div class="invalid-feedback">Please fill out this field.</div>
																    </div>

																    <div class="form-group text-center">
																    	<button type="submit" class="btn btn-danger w-50" name="adminlogin">Login</button>
																  	</div>
																  </form>
													</div>
							                    </div>
							                  </div>	
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>

			<!--Login Modal End-->

 		<div class="col-sm-12 col-lg-6 border-left border-danger">
 			<h3 class="text-center">Register Yourself</h3>
 				<hr class="w-50">
 			<!-- ---------------------------------------------------------------- -->

 			 <nav>
				<div class="nav nav-tabs nav-fill bg-danger " id="nav-tab" role="tablist">
				<a class="nav-item nav-link active text-dark" id="nav-user-tab" data-toggle="tab" href="#nav-user-reg" role="tab" aria-controls="nav-user-reg" aria-selected="true">User</a>
				<a class="nav-item nav-link text-dark " id="nav-admin-tab" data-toggle="tab" href="#nav-admin-reg" role="tab" aria-controls="nav-admin-reg" aria-selected="false">Admin</a>
				</div>
			 </nav>
			 <div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-user-reg" role="tabpanel" aria-labelledby="nav-user-tab">
						<div class="container">
									  <form action="uploaduserinfo.php" method="post" class="was-validated mt-3">
									   
									    <div class="form-group">
									      <label for="Name">Full Name:</label>
									      <input type="text" class="form-control" id="Name" placeholder="Full name" name="Name" required>
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									   
									    <div class="form-group">
									      <label for="reginumber">Registration Number:</label>
									      <input type="text" class="form-control" id="reginumber" placeholder="Registration number" name="reginumber" required minlength="7" maxlength="7">
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									    
									    
									    <div class="form-group">
									      <label for="contact Number">Contact Number:</label>
									      <input type="text" class="form-control" id="contactnumber" placeholder="contact number" name="contactnumber" required minlength="10" maxlength="10">
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									    
									    <div class="form-group">
									      <label for="course">Course:</label>
									      <select id="course" name="course" class="form-control">
									      	<option value="B Tech">B Tech</option>
									      	<option value="M Tech">M Tech</option>
									      	<option value="MBA">MBA</option>
									      	<option value="MCA">MCA</option>
									      	<option value="MSC">MSc</option>
									      	<option value="MSC Tech">MSC Tech</option>
									      </select>
									    </div>

									     <div class="form-group">
									      <label for="pass">Password:</label>
									      <input type="Password" class="form-control" id="pass" placeholder="Choose Password" name="pass" required minlength="7" maxlength="255">
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									    
									    <div class="form-group text-center">
									    	<button type="submit" class="btn btn-danger w-75">Register</button>
									  	</div>
									  </form>
				</div>
					</div>


					<div class="tab-pane fade" id="nav-admin-reg" role="tabpanel" aria-labelledby="nav-admin-tab">
						<div class="container">
									  <form action="uploadadmininfo.php" method="post" class="was-validated mt-3">
									   
									    <div class="form-group">
									      <label for="Name">Full Name:</label>
									      <input type="text" class="form-control" id="Name" placeholder="Full name" name="Name" required>
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									   
									    <div class="form-group">
									      <label for="faculty_id">Faculty Id:</label>
									      <input type="text" class="form-control" id="faculty_id" placeholder="Faculty Id" name="faculty_id" required minlength="7" maxlength="7">
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									    
									    <div class="form-group">
									      <label for="branch">Branch:</label>
									      <select id="branch" name="branch" class="form-control">
									      	<option value="CSE">CSE</option>
									      	<option value="EEE">EEE</option>
									      	<option value="ECE">ECE</option>
									      	<option value="CIVIL">CIVIL</option>
									      </select>
									    </div>

									    <div class="form-group">
									      <label for="contact Number">Contact Number:</label>
									      <input type="text" class="form-control" id="contactnumber" placeholder="contact number" name="contactnumber" required minlength="10">
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>

									     <div class="form-group">
									      <label for="pass">Password:</label>
									      <input type="Password" class="form-control" id="pass" placeholder="Choose Password" name="pass" required minlength="7" maxlength="255">
									      <div class="valid-feedback">Valid.</div>
									      <div class="invalid-feedback">Please fill out this field.</div>
									    </div>
									    
									    <div class="form-group text-center">
									    	<button type="submit" class="btn btn-danger w-75">Register</button>
									  	</div>
									  </form>
				</div>
					</div>
			 </div>	
 			<!---------------------------------------------------------------------->
				
 		</div>
 	</div>
 	</div>
 	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>