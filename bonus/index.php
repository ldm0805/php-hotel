<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

$titles = array_keys($hotels[0]);

$filteredHotels = [];

$parking = isset($_GET['parking']) ? $_GET['parking'] : '';
$vote = isset($_GET['vote']) ? (int) $_GET['vote'] : '';

foreach ($hotels as $hotel) {
    if (($parking == 'yes_parking' && $hotel['parking'] == true) || ($parking == 'no_parking' && $hotel['parking'] == false) || $parking == '') {
        if ($vote == '' || $hotel['vote'] >= $vote) {
            $filteredHotels[] = $hotel;
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bonus php hotel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
        <form action="./index.php" methods="GET">
            <h1 class="text-center">Cerca l'hotel in base al parcheggio oppure in base al voto:</h1>
            <div class="park">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="parking" id="radio_1" value="yes_parking" >
                    <label class="form-check-label" for="radio_1">
                        Con parcheggio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="parking" id="radio_2" value="no_parking">
                    <label class="form-check-label" for="radio_2">
                        Senza parcheggio
                    </label>
                </div>
                <div class="form-check d-flex align-items-center">
                <label for="vote">Voto:</label>
                <input class="form-control" type="number" name="vote" id="vote" min="1" max="5" step="1" value="<?php echo isset($_GET['vote']) ? $_GET['vote'] : '' ?>">
                </div>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>

        <table class="table table table-bordered">
            <thead class="text-center">
                <?php foreach($titles as $title){?>
                    <th><?php echo $title;?></th>
                <?php }?>
            </thead>
            <tbody  class="text-center"> 
                <?php foreach ($filteredHotels as $hotel) { ?>
                <tr>
                    <td><?php echo $hotel['name'];?></td>
                    <td><?php echo $hotel['description'];?></td>
                    <td>
                        <?php echo $hotel['parking'] ? 'Il parcheggio è disponibile' : 'Il parcheggio non è disponibile';?>
                    </td>
                    <td><?php echo $hotel['vote'];?></td>
                    <td><?php echo $hotel['distance_to_center'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>