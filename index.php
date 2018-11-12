<!DOCTYPE html>
<html>
  <head>
    <title>System Login</title>

    <link type="text/css" href="css/style.css" rel="stylesheet" />
    </head>

    <body>
      

<form action="vehicle_registration.php" method="post">
  <div
class="imgcontainer">
  <img src="img/img_avatar1.jpeg" alt="Avatar" class="avatar" />
</div>

<div class="container">
  <label for="uname">
    <b>Username</b></label>
    <input type="text"  placeholder="Enter Username" name="uname" required onkeyup="validateUserInput()">

  <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required onblur="validatePasswordInput()">

    <button id="btnLogin" type="submit">Login</button>

   <label>
     <input type="checkbox"  checked="checked"  name="remember"> Remember me
   </label>
 </div>

 <div class="bottom-container">
 <button id="btnCancel" type="button"  class="cancelbtn">Cancel</button>

 <span class="psw">Forgot<a href="#">password?</a>
</span>


</div>
</form>

  <script src="js/validation.js"></script>
</body>

</html>
