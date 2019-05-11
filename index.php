<!doctype html>

<html>

  <head>
    <link rel="stylesheet" href="index.css"/>

    <title>bookStore | mainPage</title>
  </head>

  <body>
    <?php include('templates/header.html');?>


    <main>
        <ul>
            <?php
                $db=mysqli_connect('sql208.vcn.ir','vcnus_23421328','7q2503r8','vcnus_23421328_bookSite');
                $query="select distinct subject from books";
                $subject=mysqli_query($db,$query);
                $subject_table=mysqli_fetch_array($subject);


                while($subject_table){
                    echo "<h1>{$subject_table[0]}</h1>";


                    $query="select * from books where subject='{$subject_table[0]}'";
                    $books=mysqli_query($db,$query);
                    $books_table=mysqli_fetch_array($books);
                    while($books_table){
                        echo "    <li>
                                  <a href=\"bookDetail/bookDetail.php?id={$books_table['id']}&name={$books_table['name']}&pic={$books_table['imgSrc']}&price={$books_table['price']}&detail={$books_table['detail']}\"><img src=\"{$books_table['imgSrc']}\"/></a><br>
                                  name:<a href=\"bookDetail/bookDetail.php?id={$books_table['id']}&name={$books_table['name']}&pic={$books_table['imgSrc']}&price={$books_table['price']}&detail={$books_table['detail']}\">{$books_table['name']}</a><br>
                                  price:{$books_table['price']}<br>
                                  <a href=\"bookDetail/bookDetail.php?id={$books_table['id']}&name={$books_table['name']}&pic={$books_table['imgSrc']}&price={$books_table['price']}&detail={$books_table['detail']}\">moreInfo</a>
                                  </li>";
                                  $books_table=mysqli_fetch_array($books);
                    }


                    $subject_table=mysqli_fetch_array($subject);
                }
            ?>
        </ul>
    </main>

    <?php include('templates/footer.html');?>
  </body>


</html>
