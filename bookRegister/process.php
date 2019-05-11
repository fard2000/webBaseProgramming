<?php

$username=$_POST['userName'];
$pass=$_POST['pass'];
$db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
// $db=mysqli_connect('localhost','root','','bookSite');
$q="select * from users where username='$username' and pass='$pass'";
$result=mysqli_fetch_assoc(mysqli_query($db,$q));
if($result==null)
    echo("incurrect user or password");
else
{
    $bookName=$_POST['bookName'];
    $price=$_POST['price'];
    $detail=$_POST['detail'];
    $usrid=$result['id'];
    $subject=$_POST['subject'];
    $q="insert into books(usrid,name,price,detail,subject) values($usrid,'$bookName',$price,'$detail','$subject')";
    mysqli_query($db,$q);
    mysqli_close($db);
    echo("done");
}
?>
<body>
<br>
  click <a href="bookRegister.php"> here </a> to go back
</body>
</html>
