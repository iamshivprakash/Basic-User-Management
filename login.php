<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/links.php'; ?>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
    <title>Login</title>
		<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
   <link rel="stylesheet" href="css/register.css">

  <body>
		<div class="container register">
		                <div class="row">
		                    <div class="col-md-3 col-11 register-left mx-auto">
                          <a href="index">
                            <img src="images/EXAMission.png" alt="EXAMission Logo"/>
                             <h3>EXAMission.</h3>
                          </a>
                            <h6 class="mt-3">Don't have an Account yet?</h6>
                            <h5 class="text-warning mt-3">Resgister here Free!</h5>
                            <p><a href="#register" data-bs-toggle="modal" data-bs-target="#register" data-bs-dismiss="modal" class="btn btn-primary btnLeft"><i class="fas fa-angle-double-right"></i> Register</a>
                            </p>
		                    </div>
		                    <div class="col-md-9 register-right">
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
                              <h3 class="register-heading me-3">Students Login</h3>
                              <form class="" action="" method="post">
                                <div class="row login-form">
                                  <div class="col-md-6 col-11">
                                  <p id="err-msg" class="text-danger ml-3"></p>
                                    <div class="form-group">
                                      <input required type="email" class="form-control" name="email" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                      <input required type="password" class="form-control" name="password" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                      <input type="submit" class="btn btn-primary btnRegister" name="studentslogin" value="Login"/>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="tab-pane" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                              <h3 class="register-heading">Teachers Login</h3>
                              <form class="" action="/User-Management/login" method="post">
                                <div class="row login-form">
                                  <div class="col-md-6 col-11">
                                  <p id="err-msg" class="text-danger ml-3"></p>
                                    <div class="form-group">
                                      <input required type="email" class="form-control" name="email" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                      <input required type="password" class="form-control" name="password" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                      <input type="submit" class="btn btn-primary btnRegister" name="teacherslogin" value="Login"/>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="tab-pane" id="parent" role="tabpanel" aria-labelledby="parent-tab">
                              <h3  class="register-heading">Parents login</h3>
                              <form class="" action="/User-Management/login" method="post">
                                <div class="row login-form">
                                  <div class="col-md-6 col-11">
                                  <p id="err-msg" class="text-danger ml-3"></p>
                                    <div class="form-group">
                                      <input required type="email" class="form-control" name="email" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                      <input required type="password" class="form-control" name="password" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                      <input type="submit" class="btn btn-primary btnRegister" name="parentslogin" value="Login"/>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
                  </body>
                  </html>

    <?php

       include 'includes/connection.php';

       // checking if submit button for studentlogin is clicked or not
        if (isset($_POST['studentslogin'])){
          $email = $_POST['email'];
          $password = $_POST['password'];

        //checking if email is already registered or not
        $emailsearch = "select * from students where email='$email'";
        $query = mysqli_query($con,$emailsearch);
        $emailcount = mysqli_num_rows($query);

        if($emailcount){  //if email found then store encrypted password for validation
          $email_pass = mysqli_fetch_assoc($query);
          $realpassword = $email_pass['password'];

        $_SESSION['fname'] = $email_pass['fname']; //fetching the fname of user from session

          $pass_decode = password_verify($password,$realpassword);  //verify password with real password
          if($pass_decode){
            ?>
            <script>

              location.replace("profile.php");
            </script>
            <?php
          }else{
            ?>
            <script>
              document.getElementById('err-msg').innerHTML = "Wrong email and/or password.";
            </script>
            <?php
          }
        }else {
          ?>
          <script>
            document.getElementById('err-msg').innerHTML = "This email is not registered yet.";

          </script>
          <?php
        }
      }

      // checking if submit button for teachersogin is clicked or not
      if (isset($_POST['teacherslogin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
      //checking if email is already registered or not
      $emailsearch = "select * from teachers where email='$email'";
      $query = mysqli_query($con,$emailsearch);

      $emailcount = mysqli_num_rows($query);

      if($emailcount){  //if email found then store encrypted password for validation
        $email_pass = mysqli_fetch_assoc($query);
        $realpassword = $email_pass['password'];

        $_SESSION['fname'] = $email_pass['fname']; //fetching the fname of user from session

        $pass_decode = password_verify($password,$realpassword);  //verify password with real password
        if($pass_decode){
          ?>
          <script>
            location.replace("profile.php");
          </script>
          <?php
        }else{
          ?>
          <script>
          document.getElementById('err-msg').innerHTML = "Wrong email and/or password.";
          </script>
          <?php
        }
      }else {
        ?>
        <script>
        document.getElementById('err-msg').innerHTML = "This email is not registered yet.";
        </script>
        <?php
      }
    }

      // checking if submit button for parentslogin is clicked or not
      if (isset($_POST['parentslogin'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      //checking if email is already registered or not
        $emailsearch = "select * from parents where email='$email'";
        $query = mysqli_query($con,$emailsearch);
        $emailcount = mysqli_num_rows($query);

        //if email found then store encrypted password for validation
        if($emailcount){
            $email_pass = mysqli_fetch_assoc($query);
            $realpassword = $email_pass['password'];

            $_SESSION['fname'] = $email_pass['fname']; //fetching the fname of user from session

            $pass_decode = password_verify($password,$realpassword);  //verify password with real password
            if($pass_decode){
            ?>
              <script>
                location.replace("profile.php");
              </script>
            <?php
        }else{
      ?>
          <script>
            document.getElementById('err-msg').innerHTML = "Wrong email and/or password.";
          </script>
        <?php
        }
          }else {
            ?>
              <script>
                  document.getElementById('err-msg').innerHTML = "This email is not registered yet.";
              </script>
          <?php
          }
      }

?>
