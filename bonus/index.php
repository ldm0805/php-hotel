<!-- Recupero dei dati ed assegnazioni alle variabili -->
<?php
$parking = $_GET['parking'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href="./css/style.css">
        <title>Primo eserecizio php</title>
</head>
    <body>
        <div class="center">
            <h3>Ti serve il parcheggio?</h3>
            <!-- Recupero dei dati nella form tramite il medoto POST -->
            <form action="./filter.php" method="GET">
                <label class="form-check-label" for="inlineRadio1">Ti serve il parcheggio?</label>
                <input class="form-check-input" type="checkbox" name="parking" id="inlineRadio1" value="option1">
                <button type="submit">Cerca l'hotel</button>
            </form>
        </div>
    </body>
</html>