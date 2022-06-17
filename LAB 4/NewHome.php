<?php

   session_start();
   echo $_SESSION['username'];
   echo $_SESSION['password'];



?>

<html>
<head>
	<title>Home page </title>
</head>
<body>
	
	
	<h1>HELLOW this is our dream home</h1>

	
	

</body>
</html>

<?php } else {
	echo "invalid request";
}?>
