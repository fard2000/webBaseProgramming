<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="bookDetail.css"/>

    <title>bookStore | mainPage</title>
  </head>

  <body>
    <?php include('../templates/header.html');?>


        <main>
          <section>
            book name : <?php echo $_GET['name'];?><br><br>
            pictures:<br><br>
            <img src="<?php echo $_GET['pic']?>">
            <img src="<?php echo $_GET['pic']?>"><br><br>
            price : <?php echo $_GET['price']?><br><br>
            <p>
              details:<br><br>
              <?php echo $_GET['detail'] ?>
            </p>
            <form action="../addToBasket.php" method="get">
               <?php echo"<input id=\"bookID\" type=\"text\" name=\"bookID\" value=\"{$_GET['id']}\">"?><br><br>
               <input type="submit" value="add to basket">
            </form>
        </section>
        </main>


    <?php include('../templates/footer.html');?>
  </body>


</html>
