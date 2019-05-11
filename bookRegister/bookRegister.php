<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="bookRegister.css"/>

    <title>bookStore | login</title>
  </head>

  <body>
    <?php include('../templates/header.html');?>


    <main>
          <h1> book register form</h1>
          <form method="post" action="process.php" enctype="multipart/form-data">
            <label for="userName">username</label><input type="text" id="userName" name="userName"><br><br>
            <label for="pass">password</label><input type="text" id="pass" name="pass"><br><br>
            <label for="bookName">bookName</label><input type="text" id="bookName" name="bookName"><br><br>
            <label for="price">price</label><input type="text" id="price" name="price"><br><br>
            <label for="subject">subject</label><select name="subject" id="subject">
                                                    <option value="science">scinece</optoin>
                                                    <option value="religion">religion</optoin>
                                                    <option value="technical">technical</optoin>
                                                </select><br><br>
            <label for="detail">discription</label><textarea id ="detail" name="detail" rows="8" cols="40"></textarea><br><br>
            <label for="pic">book pictures&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="file" id="pic" name="pic"><br><br>
            <input type="submit" value="confirm">
            <br><br>
          </form>
    </main>

    <?php include('../templates/footer.html');?>
  </body>


</html>
