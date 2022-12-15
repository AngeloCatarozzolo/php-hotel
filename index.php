<!-- Array di hotel. -->
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
    <link rel="stylesheet" href="../style.css">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>

<!-- Stampa dei dati -->

<ul>
    <?php foreach($hotels as $hotel) { ?>
    <li>
        <p> Nome: <?php echo $hotel['name']; ?>  </p> 
        <p> Descrizione: <?php echo $hotel['description']; ?>  </p>
        <p> Parcheggio: <?php echo $hotel['parking'] ? 'Si' : 'No'; ?>  </p>
        <p> Voto: <?php echo $hotel['vote']; ?>  </p>
        <p> Distanza dal centro: <?php echo $hotel['distance_to_center']; ?>  </p>
    </li>
    <?php } ?>
</ul>

<hr>

<!-- Stampa dei dati nella tabella -->

<h1>PHP Hotel</h1>

<table class="table table-striped">
    <tbody class="table-group-divider">
        <tr>
        <th scope="col">Nome:</th>
        <?php foreach ($hotels as $hotel) { ?>
        <td scope="row"><?php echo $hotel["name"] ?></td>
        <?php } ?>
        </tr>
        <!----->
        <tr>
        <th scope="col">Descrizione:</th>
        <?php foreach ($hotels as $hotel) { ?>
        <td scope="row"><?php echo $hotel["description"] ?></td>
        <?php } ?>
        </tr>
        <!----->
        <tr>
        <th scope="col">Parcheggio:</th>
        <?php foreach ($hotels as $hotel) { ?>
        <td scope="row"><?php  echo $hotel["parking"] ? 'si' : 'no' ?></td>
        <?php } ?>
        </tr>
        <!----->
        <tr>
        <th scope="col">Voto:</th>
        <?php foreach ($hotels as $hotel) { ?>
        <td scope="row"><?php echo $hotel["vote"] ?></td>
        <?php } ?>
        </tr>
        <!----->
        <tr>
        <th scope="col">Distanza dal centro:</th>
        <?php foreach ($hotels as $hotel) { ?>
        <td scope="row"><?php echo $hotel["distance_to_center"] ?></td>
        <?php } ?>
        </tr>
    </tbody>
</table>

<!-- Bonus 1 -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>