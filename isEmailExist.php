<?php
include "includes/connection.php";

$email = $_POST['email'];
$user_type = $_POST['user_type'];

if($user_type == 's-email'){
    $sql = "SELECT * FROM students WHERE email='$email'";
}else if($user_type == 't-email'){
    $sql = "SELECT * FROM teachers WHERE email='$email'";
}else if($user_type == 'p-email'){
    $sql = "SELECT * FROM parents WHERE email='$email'";
}

$query = mysqli_query($con,$sql);
$emailcount = mysqli_num_rows($query);


if ($emailcount == 0)
{
    $err = "";
    $res = array('err' => $err);
    echo json_encode($res);

}else
{
    $err = "<p class='p-1 alert alert-danger' style='float:right;'> email already exists! </p>";
    $res = array('err' => $err);
    echo json_encode($res);

}



?>
