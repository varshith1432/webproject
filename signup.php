
<html>
<head>
<style>
.error {background: #FF0000;}
.bob {background: #eeeeee ;}
</style>
</head>
<body align="center" class="bob">  
<?php
 
 $fname =$uname= $email = $password = $conpassword = $phneno=$gender="";
if (empty($_POST["fname"])) {
     $fnameErr = "Name is required";
   } else {
     $fname = test_input($_POST["fname"]);
   }
   if (empty($_POST["uname"])) {
    $unameErr = "UserName is required";
  } else {
    $uname = test_input($_POST["uname"]);
  }
 
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
 
   if (empty($_POST["password"])) {
     $passwordErr = "";
   } else {
     $password = test_input($_POST["password"]);
   }
 
   if (empty($_POST["conpassword"])) {
     $conpasswordErr= "";
   } else {
     $conpassword = test_input($_POST["conpassword"]);
     if($password==$conpassword)
     {

     }
     else
     {
       $conpasswordErr="DIDN'T MATCH";
     }
   }
   if (empty($_POST["phneno"])) {
    $phnenoErr = "";
  } else {
    $phneno = test_input($_POST["phneno"]);
  }
   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
 
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <h2>REGISTRATION FORM</h2>
<p align="center"><span class="error">* required field</span></p>

<form method="post" action="sql_connection.php" >  
<table align="center">
<tr>
  <th align="left">FullName:<span class="error">* <?php echo $fnameErr;?></span></th>
  <th align="left">UserName: <span class="error">* <?php echo $unameErr;?></span></th>
</tr>
<tr>
  <td> <input type="text"  name="fname" size="40"></td>
   <td> <input type="text" name="uname" size="40"> </td>
</tr>
<tr>
  <td align="left">Email: <span class="error">* <?php echo $emailErr;?></span></td>
  <td align="left"> Phonenumber:</td>
</tr>
<tr>
<td> <input type="text"  name="email" size="40"> </td>
<td> <input type="text"  name="phneno" size="40"> </td>
</tr>
<tr>
  <td align="left">Password:</td>
  <td align="left">ConfirmPassword:<span class="error">* <?php echo $conpasswordErr;?></span></td>
</tr>
  <tr>
   <td> <input type="password" name="password"  size="40"></td>
  <td> <input type="password" name="conpassword" size="40"> </td>
</tr>

  
<tr>
  <td>Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?> </span>
</td>
</tr>
<tr>
  <tr>
    <td> <input type="checkbox" name="c1"> I Agree the Terms And Conditions</td>
</tr>

 <td>
 </td>
  <td align="left"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>  
  

  <a href="loginpage.html">  <H3 ALIGN="CENTER" style="bckground-color:red">ACCOUNT EXISTS ?</H3> </A>
</FORM>
</body>
</html>