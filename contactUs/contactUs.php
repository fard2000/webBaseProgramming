<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="contactUs.css"/>

    <title>bookStore | login</title>
  </head>

  <body>
    <?php include('../templates/header.html');?>


    <main>
        <ul>

          <h1> contactForm</h1>

          <form method="post" action="process.php">
              <label for="name">name</label><input type="text" id="name"name="name"><br><br>
            <label for="subject">subject</label><input type="text" id="subject"name="sub"><br><br>
            <label for="phoneNum">phoneNumber</label><input type="text" id="phoneNum" name="phoneNum"><br><br>
            <label for="email">email</label><input type="text" id="email" name="email"><br><br>
            <label for="discription">discription</label><textarea id ="discription" name="discription" rows="8" cols="40"></textarea><br><br>
            <input type="submit" value="confirm">
            <br><br>
          </form>
    </main>

    <?php include('../templates/footer.html');?>
  </body>


</html>
