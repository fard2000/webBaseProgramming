<?php

    $name=$_POST['name'];
    $subject=$_POST['sub'];
    $phone=$_POST['phoneNum'];
    $email=$_POST['email'];
    $dis=$_POST['discription'];

    // $db=mysqli_connect('localhost','root','','bookSite');
    $db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
    $query="insert into contacts(name,subject,phone,email,dis) values('$name','$subject',$phone,'$email','$dis')";
    mysqli_query($db,$query);
    mysqli_close($db);

    echo("ok");

    $msg="$name said subject: $subject   content: $dis   her info:  phoneNumber:$phone   email:$email";
    mail("faride13578642@gmail.com","bookSiteContacts",$msg,"From: someOne@someMailService.someDomain");
?>
  <body>
    click <a href="contactUs.php"> here </a> to go back
  </body>
  </html>
