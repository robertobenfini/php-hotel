<?php

    require __DIR__.'/partials/hotels.php';

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-hover border mt-5 shadow-lg text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="text-danger">Name</th>
                                <th scope="col" class="text-danger">Description</th>
                                <th scope="col" class="text-danger">Parking</th>
                                <th scope="col" class="text-danger">Vote</th>
                                <th scope="col" class="text-danger">Distance to center</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($hotels as $hotel) { ?>
                            <tr>
                                <th scope="row"><?php echo $hotel['name'] ?></th>
                                <td><?php echo $hotel['description'] ?></td>
                                <td><?php echo $hotel['parking'] ?></td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>