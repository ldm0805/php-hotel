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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array php</title>
</head>
    <body>
        <table class="mt-3 table table-bordered">
            <thead class="text-center">
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Voto</th>
                <th>Distanza dal centro</th>
                <th>Parcheggio</th>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel){?>
                    <tr class="text-center">
                        <td><?php echo $hotel['name'];?></td>
                        <td><?php echo $hotel['description'];?></td>
                        <td><?php echo $hotel['vote'];?></td>
                        <td><?php echo $hotel['distance_to_center'];?></td>
                        <td>
                            <?php if($hotel['parking']){
                                echo 'Il parcheggio è disponibile';
                            }else{
                                echo 'Il parcheggio non è disponibile';
                                }; ?>
                        </td>
                    </tr>
                <?php }?>

            </tbody>
        </table>
    </body>
</html>