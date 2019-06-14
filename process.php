<?php
session_start();
require('db.php');
if (isset($_POST['username']) && isset($_POST['password'])){
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$query = "SELECT * FROM `employees` WHERE emp_email='$username' and emp_password='$password' LIMIT 1";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['auth'] =true;
    $_SESSION['emp_id'] = $row['emp_id'];
    $_SESSION['emp_name'] = $row['emp_first_name']." ".$row['emp_last_name'];

header("Location: /panel.php");
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
} else {
 echo "Not POST";
}
