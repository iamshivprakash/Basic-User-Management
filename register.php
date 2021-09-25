<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/links.php'; ?>
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
	<title>Registration</title>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<link rel="stylesheet" href="css/register.css">

  <body>
		<div class="container register">
		    <div class="row">
		        <div class="col-md-3 col-11 register-left mx-auto">
					<a href="http://examission.com">
						<img src="images/EXAMission.png" alt="EXAMission Logo"/>
						<h3>EXAMission.</h3>
					</a>
					<h6 class="mt-3">Already have an Account.</h5>
					<h5 class="text-warning mt-3">Login here to Explore everything.</h5>
					<p><a href="#login" data-bs-toggle="modal" data-bs-target="#login" data-bs-dismiss="modal" class="btn btn-primary btnLeft"><i class="fas fa-angle-double-right"></i> Login</a></p>
            	</div>
		        <div class="col-md-9 col-11 register-right mx-auto">
					<div class="row">
						<div class="col-md-5 col-11 mx-auto">
							<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
								<a class="nav-link active" id="student-tab" data-bs-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="teacher-tab" data-bs-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="parent-tab" data-bs-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false">Parent</a>
								</li>
							</ul>
						</div>
					</div>
                          <div class="tab-content" id="myTabContent">
		                        <div class="tab-pane active" id="student" role="tabpanel" aria-labelledby="student-tab">
		                            <h3 class="register-heading">Register as a Student</h3>
										<form class="" action="" method="post">
											<div class="row register-form">
	 											<div class="col-md-6 col-11">
	 												<div class="form-group">
	 													<input required type="text" class="form-control" name="fname" placeholder="First Name *" value="" />
	 												</div>
													<div class="form-group">
															<input required type="text" class="form-control" name="lname" placeholder="Last Name *" value="" />
													</div>
													<div class="form-group">
															<input required type="password" class="form-control" name="password" id="s-password" placeholder="Password *"  />
													</div>
													<div class="form-group">
															<input required type="password" class="form-control" name="cpassword" id="s-cpassword" placeholder="Confirm Password *" onchange="matchPasswd('s-password','s-cpassword','s-err-msg')"/>
															<div id="s-err-msg"></div>
													</div>
	 											</div>
												<div class="col-md-6 col-11">
													<div class="form-group">
														<input required type="email" class="form-control" id="s-email" name="email" placeholder="Email *" onchange="isEmailExist('s-email','s-email-validation')" />
														<div id="s-email-validation"></div>
													</div>
													<div class="form-group">
														<input required type="text" minlength="10" maxlength="10" class="form-control" name="phone" placeholder="Phone Number *" value="" />
													</div>
													<div class="form-group">
														<input type="text"  class="form-control" name="course" placeholder="Course *" value="" required/>
													</div>
													<div class="form-group">
														<input type="submit" class="btnRegister" name="studentsubmit" value="Register"/>
													</div>
	 										    </div>
	 								        </div>
	 							        </form>
		                        </div>

								<div class="tab-pane" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
									<h3 class="register-heading">Register as a Teacher</h3>
										<form class="" action="" method="post">
											<div class="row register-form">
												<div class="col-md-6 col-11">
													<div class="form-group">
														<input type="text" class="form-control" name="fname" placeholder="First Name *" value="" />
													</div>
													<div class="form-group">
														<input type="text" class="form-control" name="lname" placeholder="Last Name *" value="" />
													</div>
													<div class="form-group">
														<input type="password" class="form-control" name="t-password" id="t-password" placeholder="Password *" value="" />
													</div>
													<div class="form-group">
														<input type="password" class="form-control" name="t-cpassword" id="t-cpassword" placeholder="Confirm Password *" onchange="matchPasswd('t-password','t-cpassword','t-err-msg')" />
													<div id="t-err-msg"></div>
												</div>
											</div>
											<div class="col-md-6 col-11">
													<div class="form-group">
														<input type="email" class="form-control" name="email" placeholder="Email *" id="t-email" onchange="isEmailExist('t-email','t-email-validation')" />
														<div id="t-email-validation"></div>
													</div>
													<div class="form-group">
														<input type="text" minlength="10" maxlength="10" class="form-control" name="phone" placeholder="Phone Number *" value="" />
													</div>
													<div class="form-group">
														<input type="text"  class="form-control" name="qualification" placeholder="Qualification *" value="" />
													</div>
													<div class="form-group">
														<input type="submit" class="btnRegister" name="teachersubmit" value="Register"/>
													</div>
											</div>
										</div>
									</form>

								</div>

		                            <div class="tab-pane" id="parent" role="tabpanel" aria-labelledby="parent-tab">
		                                <h3  class="register-heading">Register as a Parent</h3>
											<form class="" action="" method="post">
												<div class="row register-form">
			                                        <div class="col-md-6 col-11">
														<div class="form-group">
															<input type="text" class="form-control" name="fname" placeholder="First Name *" value="" />
														</div>
														<div class="form-group">
															<input type="text" class="form-control" name="lname" placeholder="Last Name *" value="" />
														</div>
														<div class="form-group">
															<input type="email" class="form-control" name="email" id="p-email" placeholder="Email *" onchange="isEmailExist('p-email','p-email-validation')" />
															<div id="p-email-validation"></div>
														</div>
														<div class="form-group">
															<input type="text" maxlength="10" minlength="10" class="form-control" name="phone" placeholder="Phone Number*" value="" />
														</div>
			                                        </div>
														<div class="col-md-6 col-11">
														<div class="form-group">
															<input type="password" class="form-control" id="p-password" name="password" placeholder="Password *" value="" />
														</div>
														<div class="form-group">
															<input type="password" class="form-control" id="p-cpassword" name="cpassword" placeholder="Confirm Password *" onchange="matchPasswd('p-password','p-cpassword','p-err-msg')" />
															<div id="p-err-msg"></div>
														</div>
														<div class="form-group">
															<input type="text"  class="form-control" name="city" placeholder="City *" value="" />
														</div>
														<div class="form-group">
														    <input type="submit" class="btnRegister" name="parentsubmit"  value="Register"/>
													    </div>
												    </div>
			                                    </div>
									      	</form>
		                             </div>
		                        </div>
		                    </div>
		             </div>
		    </div>


			<script src="js/register.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>




 <?php

    include "includes/connection.php";


// checking if submit button for student is clicked or not

if (isset($_POST['studentsubmit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$course = $_POST['course'];

		// PASSWORD ENCRYPTION
		$crypt_password = password_hash($password, PASSWORD_BCRYPT);

		$insertquery = " insert into students(fname,lname,phone,email,password,course)
				         values('$fname','$lname','$phone','$email','$crypt_password','$course') ";

		// $insertquery = " insert into teacher values('$email','$password') ";

		$res = mysqli_query($con,$insertquery);

		if($res){ ?>
			<script>
			   location.replace("login.php");
			</script>
			<?php
		}else {
			?>
			<script>
			   alert("there are some errors, try again!");
			</script>
			<?php
		}
	}

// checking if submit button for teacher is clicked or not
if (isset($_POST['teachersubmit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$qualification = $_POST['qualification'];

		// PASSWORD ENCRYPTION
		$crypt_password = password_hash($password, PASSWORD_BCRYPT);


		$insertquery = " insert into teachers(fname,lname,phone,email,password,qualification)
			        	 values('$fname','$lname','$phone','$email','$crypt_password','$qualification') ";

		$res = mysqli_query($con,$insertquery);

		if($res){ ?>
				<script>
			     	location.replace("login.php");
				</script>
			    <?php
		}else {
				?>
				<script>
					alert("there are some errors, try again!");
				</script>
				<?php
		}


}



// checking if submit button for parents is clicked or not
if (isset($_POST['parentsubmit'])) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$city = $_POST['city'];

			// PASSWORD ENCRYPTION
			$crypt_password = password_hash($password, PASSWORD_BCRYPT);


			$insertquery = "insert into teachers(fname,lname,phone,email,password,qualification)
							values('$fname','$lname','$phone','$email','$crypt_password','$qualification') ";

			$res = mysqli_query($con,$insertquery);

			if($res){ ?>
						<script>
							location.replace("login.php");
						</script>
					<?php
			}else {
					?>
						<script>
						     alert("there are some errors, try again!");
						</script>
					<?php
		    }
	}

?>

</body>
</html>
