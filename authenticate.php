<?php
include 'connection.php';
$conn = OpenConn();

  $username = $_POST['uname'];
  $password = $_POST['psw'];
  $sql = "SELECT * FROM student WHERE student_id=$username AND student_password=$password";
  $result = mysqli_query($conn, $sql);
  $numRows = mysqli_num_rows($result);

  if ($numRows == 1){
    header('Location: homePage.html') ;
  }
  else{
    echo "fail";
  }






  //$count = mysqli_num_rows($result);

//  if (mysqli_num_rows($result) == 1){ //checking there is a match in db
  //  header('Location: homePage.html'); //redirecting user to homepage after loggin in
  //}
//  else{
  //  echo "Incorrect Login";
//  }
?>
