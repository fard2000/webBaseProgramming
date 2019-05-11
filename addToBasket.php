<?php
    if(isset($_GET['user'])){
        $db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
        $q="select * from users where username='{$_GET['user']}' && pass='{$_GET['pass']}'";
        $result=mysqli_query($db,$q);
        $user=mysqli_fetch_array($result);
        if($user==null){
            echo "incorrect user or pass";
        }
        else{
            $q="insert into favBooks values({$user['id']},{$_GET['bookID']})";
            mysqli_query($db,$q);
            header("Location: index.php");
            exit;

        }
    }
?>
<!doctype html>
<html>
    <head>
      <link rel="stylesheet" href="index.css"/>

      <title>bookStore | mainPage</title>
    </head>

    <body>
        <?php include('templates/header.html');?>
        <main>
            <form action="" method="get">
                <?php echo"<input id=\"bookID\" type=\"text\" name=\"bookID\" value=\"{$_GET['bookID']}\">"?><br><br>
                <input type="text" name="user"><br><br>
                <input type="text" name="pass"><br><br>
                <input type="submit">
            </form>
        </main>
         <?php include('templates/footer.html');?>
    </body>
</html>
