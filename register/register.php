<!doctype html>
<html>
<?php

  $usrname=$_POST['userName'];
  $pass=$_POST['password'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];



  $db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
  $q="insert into users(username,pass,phone,email) value('$usrname','$pass','$phone','$email')";
  mysqli_query($db,$q) or die("salam");
  mysqli_close($db);



  echo("ok");
?>
<body>
  click <a href="register.html"> here </a> to go back
</body>
</html>
