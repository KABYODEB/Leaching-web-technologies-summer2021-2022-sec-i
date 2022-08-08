
<?php
	//require_once('../controller/header.php');
  session_start();
  include_once("Nav2.php");

  if(empty($_SESSION["Username"])){
    header("Location: AdminSignIn.php");
  }
	
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../controll/asset/css/design3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHome Page</title>
<style>
body {
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Job Portal</p> 
	          <p style="color:green;font-size:30px;">ADMIN Dashboard</p>  


</Center></b><br>
<center>

<table border="5px" style="background-color:#79cafc;color:black">
	<tr>
              <td> <b> 
                <a href="UpdateProfile.php"> 1.ADD EMPLOYEE</a> <br> </br><br>
               <a href="TestPriceSearch.php"> Search Employee</a><br> </br><br>
               <a href="AddComplain.php"> </a>
           
               <td> <b> <a href="FileUpload.php"> 2.Update Employee </a></br><br>
              <b>  3.Delete Employee</br><br>
              <pre><b>
                
</td>
</tr>

</table>
</Center>
	

</head>


</body>
</html>

