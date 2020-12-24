

<?php
$conn = mysqli_connect("localhost", "root", "", "practice");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$fname=$_POST["fname"];
$uname=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["password"];
$conpassword=$_POST["conpassword"];
$phneno=$_POST["phneno"];
$gender=$_POST["gender"];

if(!(empty($fname)||empty($uname)||empty($email)||empty($password)||empty($conpassword)||empty($phneno)||empty($gender)))
{
    if($password==$conpassword)
     {

 $hashed=hash('sha512',$password);
 
 $hashe=hash('sha512',$conpassword);
$sql = "INSERT INTO myproject (Fullname, Username, Email,Pasword,Conpasword,Phonenumber,Gender) VALUES (?,?,?,?,?,?,?)";
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"sssssis",$fname,$uname,$email,$hashed,$hashe,$phneno,$gender);
mysqli_stmt_execute($stmt);
$affected_rows=mysqli_stmt_affected_rows($stmt);

if($affected_rows==1){
    echo '<h2 align="center"> Records added successfully </h2><br>';
    echo '<a href="loginpage.html"><h2 align="center">LOGIN NOW</h2></a>';
    echo "<body style='background-color:#eeeeee'>";
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else
{
echo "PASSWORD DIDN'T MATCH"."<BR>";
echo '<a href="signup.php"> <h2 align="center">TRY AGAIN</h2></a>';


}
}
else
{

    echo '<h2 align="center">YOU SHOULD ENTER ALL FIELDS</h2><br>';
     header("location:signup.php");

}

?>

