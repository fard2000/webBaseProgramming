<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="register.css"/>

    <title>bookStore | login</title>
  </head>

  <body>
    <?php include('../templates/header.html');?>


    <main>
          <h1> register form</h1>
          <form method="post" action="process.php">
            <label for="user">username</label><input type="text" id="user" name="userName"><br><br>
            <label for="pass">password</label><input type="password" id="pass" name="password"><br><br>
            <label for="phone">phone</label><input type="text" id="phone" name="phone"><br><br>
            <label for="email">email</label><input type="email" id="email" name="email"><br><br>
            <input type="submit" value="confirm">
            <br><br>
          </form>
    </main>

    <?php include('../templates/footer.html');?>
  </body>


</html>
