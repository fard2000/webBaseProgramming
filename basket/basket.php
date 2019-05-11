<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="basket.css"/>

    <title>bookStore | mainPage</title>
  </head>

  <body>
    <?php include('../templates/header.html');?>


    <main>
        <ul>
            <?php
                $db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
                $query="select * from favBooks where usrID={$_GET['id']}";
                $book=mysqli_query($db,$query);
                $book_table=mysqli_fetch_array($book);


                while($book_table){

                    $query="select * from books where id='{$book_table[1]}'";
                    $books=mysqli_query($db,$query);
                    $books_table=mysqli_fetch_array($books);
                    echo "    <li>
                    <a href=\"../bookDetail/bookDetail.php?id={$books_table['id']}&name={$books_table['name']}&pic={$books_table['imgSrc']}&price={$books_table['price']}&detail={$books_table['detail']}\"><img src=\"{$books_table['imgSrc']}\"/></a><br>
                    name:<a href=\"../bookDetail/bookDetail.php?id={$books_table['id']}&name={$books_table['name']}&pic={$books_table['imgSrc']}&price={$books_table['price']}&detail={$books_table['detail']}\">{$books_table['name']}</a><br>
                    price:{$books_table['price']}<br>
                    <a href=\"../bookDetail/bookDetail.php?id={$books_table['id']}&name={$books_table['name']}&pic={$books_table['imgSrc']}&price={$books_table['price']}&detail={$books_table['detail']}\">moreInfo</a>
                    </li>";
                    $book_table=mysqli_fetch_array($book);
                }
            ?>
        </ul>
    </main>

    <?php include('../templates/footer.html');?>
  </body>


</html>
