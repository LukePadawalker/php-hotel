<?php
require(__DIR__ .'/hotels.php');





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


<?php foreach($hotels as $hotel) : ?>
    <div class="row d-flex">
        <div class="col-3 d-flex justify-content-center"><?php echo $hotel['name']?></div>
        <div class="col-2 d-flex justify-content-center"><?php echo $hotel['description']?></div>
        <div class="col-2 d-flex justify-content-center"><?php echo $hotel['parking']?></div>
        <div class="col-2 d-flex justify-content-center"><?php echo $hotel['vote']?></div>
        <div class="col-3 d-flex justify-content-center"><?php echo $hotel['distance_to_center']?></div>
    </div>
<?php endforeach ?>

</body>
</html>