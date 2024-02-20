<?php
require(__DIR__ .'/hotels.php');


if (isset($_GET['parking_filter'])) {
    $filteredHotels = array_filter($hotels, function ($hotel) {
        return isset($hotel['parking']) && $hotel['parking'] === true;
    });
} else {
    $filteredHotels = $hotels;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>

<form method="get">
    <label for="parking_filter">Mostra solo hotel con parcheggio</label>
    <input type="checkbox" name="parking_filter" <?php if (isset($_GET['parking_filter'])) echo 'checked'; ?>>
    <button class="btn btn-primary" type="submit">Filtra</button>
</form>
<div class="row p-4">
    
        <div class="col-3 d-flex justify-content-center h4">Nome hotel</div>
        <div class="col-2 d-flex justify-content-center h4">Descrizione</div>
        <div class="col-2 d-flex justify-content-center h4">Parcheggio</div>
        <div class="col-2 d-flex justify-content-center h4">Voto</div>
        <div class="col-3 d-flex justify-content-center h4">Distanza dal centro</div>

</div>
<?php foreach($filteredHotels as $hotel) : ?>
    <div class="row ps-4 pe-4">
        <div class="col-3 d-flex justify-content-center"><?php echo $hotel['name']?></div>
        <div class="col-2 d-flex justify-content-center"><?php echo $hotel['description']?></div>
        <div class="col-2 d-flex justify-content-center"><?php echo $hotel['parking']?></div>
        <div class="col-2 d-flex justify-content-center"><?php echo $hotel['vote']?></div>
        <div class="col-3 d-flex justify-content-center"><?php echo $hotel['distance_to_center']?></div>
    </div>
<?php endforeach ?>

</body>
</html>