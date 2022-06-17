<?php

  session_start();

  if($_SERVER['REQUEST_METHOD']=="POST")
  {

    $USERNAME =$_REQUEST['username'];
    echo $USERNAME;
    $PASSWORD =$_REQUEST['password'];
    echo $PASSWORD;
    $Email=$_REQUEST['email'];
    echo $Email;
    $Gender=$_REQUEST['gender'];



    if($USERNAME==null || $PASSWORD==null){
      echo "invalid USERNAME/PASSWORD<br>";
    }
    else{
      $_SESSION['username']==$USERNAME;
      $_SESSION['password']==$PASSWORD;

      header(location:'NewHome.php');

    }
  }
  else{
    echo "Invalid User";
  }

?>


  
