<?php

include_once __DIR__ . './movie.php';

$movies = [
    new Movie("Omicidio all'italiana", "2017", "./assets/movies/locandina-ver.jpg", "https://www.youtube.com/watch?v=X0Fkb88W7jk"),
    new Movie("Italiano medio", "2015", "./assets/movies/locandina2-ver.jpg", "https://www.youtube.com/watch?v=-JQINuybHL4"),
    new Movie("L'uomo che usciva la gente", "2008", "./assets/movies/bruce.jpg", "https://www.youtube.com/watch?v=0_mk_me1oIU"),
    new Movie("La Febbra", "2010", "./assets/movies/febbra.jpg", "https://www.youtube.com/watch?v=PE3T4watGmA&t=94s")
];
$books = [
    new Book("Libro", "2020", "./assets/movies/book1.jpg", "https://www.amazon.it/Libro-Maccio-Capatonda/dp/8891828939/ref=sr_1_1?__mk_it_IT=ÅMÅŽÕÑ&crid=3PMMYGXT869VT&keywords=libro+maccio&qid=1671209338&s=books&sprefix=libro+maccio%2Cstripbooks%2C106&sr=1-1"),
    new Book("Libro 2", "2022", "./assets/movies/book2.jpg", "https://www.amazon.it/Libro-Maccio-Capatonda/dp/8891834106"),
]
    // foreach ($movies as $elem) {
//     echo ($elem->titolo);
// }


    // var_dump($movies);

    // var_dump(Movie);

    // get_class(Movie);
// echo $movie1->titolo;
// echo $movie1->annoProduzione;

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maccio Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="blueviolet text-center">
        <img src="./assets/movies/MaccioHead-8.gif" alt="">
        <h1>Maccio Store</h1>
    </header>

    <main>
        <h1 class="px-3">Film</h1>
        <div class="border-bottom borderviolet">
            <div class="container-fluid my-2">
                <div class="row">
                    <?php foreach ($movies as $elem) { ?>
                    <div class="col col-md-3 col-lg-2">
                        <div class="card text-center " style="width: 13rem;">
                            <img src="<?php echo ($elem->poster); ?>" class="card-img-top posterw" alt="...">
                            <div class="card-body p-1 minh relative">
                                <h5 class="card-title">
                                    <?php echo ($elem->titolo); ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo ($elem->annoProduzione); ?>
                                </p>
                                <p class="card-text">
                                    <?php echo ($elem->annoCheck()); ?>
                                </p>
                                <a href="<?php echo ($elem->trailer); ?>" class="btn blueviolet absolute">Vai al trailer!</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <h1 class="px-3">Libri</h1>
        <div class="border-bottom borderviolet">
            <div class="container-fluid d-flex my-2">
                <div class="col col-md-3 col-lg-2">
                    <?php foreach ($books as $elem) { ?>
                    <div class="card text-center" style="width: 13rem;">
                        <img src="<?php echo ($elem->poster); ?>" class="card-img-top posterw" alt="...">
                        <div class="card-body p-1">
                            <h5 class="card-title">
                                <?php echo ($elem->titolo); ?>
                            </h5>
                            <p class="card-text">
                                <?php echo ($elem->annoProduzione); ?>
                            </p>
                            <a href="<?php echo ($elem->link); ?>" class="btn blueviolet">Acquista ora!</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>