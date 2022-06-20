<?php 
   
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $Id = $_REQUEST['Id'];
	$password = $_REQUEST['password'];
	$confirmPassword=$_REQUEST['password'];
	$name=$_REQUEST['name'];
	$userType=$_REQUEST['usertype'];

	

	if ($Id == null || $password == null || $confirmPassword==null || $name == null || $userType==null ) {
		echo "invalid ";
	}else{
		$data = $Id."|".$password."|".$confirmPassword."|".$name."|".$userType."\r\n";
		$file = fopen('kabyo.txt', 'a');
		fwrite($file, $data);
		header('location:Usignin.html');

	}

}

?>