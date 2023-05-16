<?php



include __DIR__ . '/Models/Movie.php';

$movies = [
    new Movies("Il Padrino", "The Godfather", 'en', '1972-03-24', 9.2 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg'),
    new Movies("Via Col Vento", "Gone With The Wind", 'en', '1939-12-15', 8.6, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg'),
    new Movies('Psycho', "Psycho", 'en', '1960-06-16', 9.4, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg' ),
    new Movies('Gravity', "Gravity", 'en', '2013-08-28', 7.8, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg'),
    new Movies('Toy Story - Il Mondo Dei Giocattoli', "Toy Story", 'it', '1995-11-19', 9.0, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg' ),
    new Movies("Pulp Fiction", "Pulp Fiction", 'de', '1994-10-14', 9.2, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg'),
    new Movies('Forrest Gump', "Forrest Gump", 'fr', '1994-06-23', 8.8, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg'),
    new Movies('Guerre Stellari', "Star Wars", 'en', '1977-05-25', 8.6, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg'),
    new Movies("E.T. - L'extra-terrestre", "E.T. The Extra-Terrestrial", 'en', '1982-05-26', 7.9, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg'),
    new Movies('Il silenzio degli innocenti', "The Silence of the Lambs", 'en', '1991-01-30', 8.6, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg'),

];





include './partials/template/header.php';
?>

<h1>Movies</h1>
<div class="d-flex gap-3 flex-wrap">
    <?php foreach ($movies as $movie) { ?>
        <div class="card mb-5" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $movie->image ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center pb-4 fw-bold"><?php echo "$movie->title" ?></h5>
                <p class="card-text fw-bold">Original Title: <?php echo "$movie->original_title" ?></p>
                <p class="card-text fw-bold">Language: <?php echo "$movie->nationality" ?> </p>
                <p class="card-text fw-bold">Date: <?php echo "$movie->date" ?> </p>
                <p class="card-text fw-bold">Vote: <?php echo "$movie->vote" ?> </p>
                
            </div>
        </div>
    <?php } ?>
</div>




<?php
include './partials/template/footer.php';
?>