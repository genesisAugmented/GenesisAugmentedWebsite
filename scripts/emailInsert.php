<?php
if(isset($_POST['email'])){
  include_once 'connect-to-mysqli.php';
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
  $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);

  $insert_query = mysqli_query($mysqli, "INSERT INTO emails(fname, lname, email, date_added)
                  VALUES('$fname','$lname','$email',now())") or die(mysqli_error($mysqli));
}
?>
