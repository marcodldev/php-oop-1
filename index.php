<?php

include_once __DIR__ . './movie.php';

$movie1 = new Movie("Batman", "1998");

$movie2 = new Movie("Italiano medio", "2014");




// var_dump(Movie);

// get_class(Movie);
echo ($Movie)[1];

?>

    <pre>
     <?php   var_dump($movie1); ?>
      <?php      var_dump($movie2); ?>
    </pre>