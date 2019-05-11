<?php
    if(isset($_POST['user'])){
        $db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
        $q="select * from users where username='{$_POST['user']}' && pass='{$_POST['pass']}'";
        $result=mysqli_query($db,$q);
        $user=mysqli_fetch_array($result);
        if($user==null){
            echo "incorrect user or pass";
        }
        else{
            header("Location: basket.php?id={$user['id']}");
            exit;

        }
    }
?>
<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="basket.css"/>

    <title>bookStore | mainPage</title>
  </head>

  <body>
    <?php include('../templates/header.html');?>


    <main>
        <form action="" method="post">
            <input type="text" name="user"><br><br>
            <input type="text" name="pass"><br><br>
            <input type="submit">
        </form>
    </main>

    <?php include('../templates/footer.html');?>
  </body>


</html>
