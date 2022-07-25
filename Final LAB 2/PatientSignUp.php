<?php
 
 include("../controller/PatientSignUpCheck.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
  <!DOCTYPE html>
<html>
<head>
  <script>
     function validate(){
      let username=document.getElementById("username").value;
      let password=document.getElementById("password").value;
      let confirmPassword=document.getElementById("confirmPassword").value;
      let Age=document.getElementById("Age").value;
      let mobileno=document.getElementById("mobileno").value;
      if(username != "" && password != "" && confirmPassword != "" && Age != "" && mobileno != ""){
        return true;
      }
      else  if(username == ""){
        alert("null username");
        return false;
      }
      else  if(password == ""){
        alert("null password");
        return false;
      }else  if(confirmPassword == ""){
        alert("null confirmPassword");
        return false;
      }
      else  if(Age== ""){
        alert("null Age");
        return false;
      }
      else  if(mobileno == ""){
        alert("null mobileno");
        return false;
      }

     }
   </script>



  <style>
body {
  background-image: url('../image/28.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<body>


<b><center>  <p style="color:black;font-size:50px;">Make Your Registration</p> 
            


</Center></b><br>
     <form  method="post" enctype="" onsubmit="return validate()">

  <center> <table>
        <tr>
          <td>username</td>
          <td> <input type="text" name="username" id="username"value="" /></td>
        </tr>
        <tr>
          <td>password</td>
          <td> <input type="password" name="password" id="password" value="" /></td>
        </tr>
         <tr>
          <td>confirmPassword </td>
          <td> <input type="password" name="password" id="password" value="" /></td><br>
        </tr>
        <tr>
          <td>Age </td>
          <td> <input type="text" name="Age" id="Age" value="" /></td><br>
        </tr>
        <tr>
          <td>mobileno </td>
          <td> <input type="tel" name="mobileno"  id="mobileno"value="" /></td><br>
        </tr>
        

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Complete Profile">
            <a href="PatientSignIn.html">SignIn</a>
          </td>
          </tr>
        </table>
      </center>
      </form>





</body>
</html>