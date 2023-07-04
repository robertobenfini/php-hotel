<?php

    //importo l'array
    require __DIR__.'/partials/hotels.php';

    //verifico se il valore è diverso da "null"
    if(isset($_GET['park'])){

        //creo un array
        $park_array = [];

        //ciclo l'array importato e ottengo l'array associato
        foreach($hotels as $hotel){

            //filtro l'array associato
            if($hotel['parking'] == filter_var($_GET['park'], FILTER_VALIDATE_BOOLEAN)){

                //pusho l'array associato filtrato nel nuovo array
                $park_array [] = $hotel;
            }
            else if($_GET['park'] == "tutti"){
                $park_array = $hotels;
            };
        };

        $hotels = $park_array;
    }

    if(isset($_GET['rated'])){

        //creo un array
        $rated_array = [];

        //ciclo l'array importato e ottengo l'array associato
        foreach($hotels as $hotel){

            //filtro l'array associato
            if($hotel['vote'] == $_GET['rated']){

                //pusho l'array associato filtrato nel nuovo array
                $rated_array [] = $hotel;
            }
            else if($_GET['rated'] == "tutti"){
                $rated_array = $hotels;
            };
        };

        $hotels = $rated_array;
    }

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
                <div class="col-3">

                    <form action="index.php" method="get" class="form-group mt-5">

                        //select per il parcheggio
                        <label class="control-lable">Seleziona hotel con o senza parcheggio</label>
                        <select name="park" class="form-control mt-2">
                            <option value="tutti" selected>Tutti</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>

                        //select per il voto
                        <label class="control-lable mt-3">Seleziona il voto</label>
                        <select name="rated" class="form-control mt-2">
                            <option value="tutti" selected>Tutti</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-danger mt-3">Salva</button>
                    </form>

                </div>
                <div class="col-9">

                    <!--tabella hotel-->
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