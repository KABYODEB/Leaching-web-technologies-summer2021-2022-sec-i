<?php
	if(isset($_COOKIE['status']))
	{

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHome Page</title>

<b>	<Center>Welcome Admin
</Center></b><br>


<a href="Create.php"> Profile </a> | 
		<a href="UList.php"> Change Password </a> | 
		<a href="PLU.php"> logout </a>


</head>
<body>

</body>
</html>

<?php } else{
	echo "invalid request";

} ?>