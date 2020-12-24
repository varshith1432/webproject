<?php

 $con= mysqli_connect("localhost", "root", "", "practice");
 if($con == false)
 {
    die("ERROR: Could not connect. " . mysqli_connect_error());
 } 
 if(isset($_POST['username']))
{
 $username=$_POST['username'];
 }
 else
 {
    echo "no data given";
 }
 if(isset($_POST['password']))
 {
 $password= $_POST['password'];
 }
 else{
    echo "no dta";
 }
 $sq="SELECT Username,Pasword FROM myproject WHERE Username='$username' and Pasword='$password'";
$stm=mysqli_query($con,$sq) or die("error");
$affect_rows=mysqli_num_rows($stm);
 if($affect_rows==1){
    header("Location:exm.html");
    //echo '<marquee bgcolor="blue">  </marquee><br>';
    //echo '<a href="exm.html"> <h2 align="center">CLICKHERE<h2></A>';
  

   } 
else{
    echo '<h2 align="center">INVALID USERNAME OR PASSWORD</h2>';
    echo '<a href="signup.php"> <h2 align="center"> TRY AGAIN</h2> </a>';
}
mysqli_close($con);

?>