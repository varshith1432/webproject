<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$user = $_POST['user'];
$age = $_POST['age'];
$Email = $_POST['mail'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];

if(!empty($user) || !empty($age)||!empty($Email)||!empty($pass)||!empty($pass1))
{
$host="localhost" ;
$dbUsername="root";
$dbPassword="";
$dbname="register" ;

//connectin
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

  if (mysqli_connect_error()) {
    die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
  }
  else {
    $SELECT= "SELECT email From registeration where Email =? Limit 1";
    $INSERT = "INSERT INTO registeration (user,age,Email,pass)values(?,?,?,?) ";

    //PREPARE
    $stmt=$conn->prepare($SELECT);
    $stmt->bind->param("s",$Email);
    $stmt->execute();
    $stmt->bind_result($Email);
    $stmt->store_result();
    $rnum=$stmt->num_rows ;

    if($rnum == 0)
    {
      $stmt->close(;
      $stmt=$conn->prepare($INSERT);
      $stmt->bind_param("siss",$user,$age,$Email,$pass);
      $stmt->execute();
      echo "new record inserted sucessfully";

    }
    else{
      echo"Someone";
    }
    $stmt->close();
    $conn->close();
    }


}


 ?>

</body>
</html>
