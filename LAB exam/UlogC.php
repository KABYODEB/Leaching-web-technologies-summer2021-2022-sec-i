<?php 
    session_start();

    $userId = $_REQUEST['userId'];
    $password = $_REQUEST['password'];
    $userType=$_REQUEST['usertype'];

   if ($userId == null || $password == null ) {
        echo "invalid username/password/email <br>";
    }
    else{
        $file = fopen('kabyo.txt', 'r');
        while (!feof($file)) {
                $line = fgets($file);
                $user = explode('|', $line);
                if($userId == trim($user[0]) && $password == trim($user[1]))
                {

                    setcookie('status', 'true', time()+3600, '/');
                    if(trim($user[4]) == "user"){
                        header('location: UHomePage.php');	
                    }else{
                        header('location:AdminH.php');
                    }
                }
        }
        echo "invalid user!";
    }



?>