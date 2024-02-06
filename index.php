<!-- 

Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

 -->
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class=bg-dark>
    <div class="container pt-5">
        <h1 class="p-5 text-center text-primary display-1 fw-bold fst-italic">Hotel <i class="fa-solid fa-hotel  ps-5 text-primary"></i></h1>
        <form action="" method="get" class="mb-5 text-center">
            <select name="parking" id="parking" class="me-5 p-2">
                <option selected value="0">Tutte le strutture</option>
                <option value="true">Strutture con parcheggio</option>
                <option value="false">Strutture senza parcheggio</option>
            </select>
            <select name="stars" id="stars" class="me-5 p-2">
                <option value="0" selected>Stelle</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button class="btn btn-primary">Cerca</button>
        </form>

        <table class="table table-striped border">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Stelle</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $parking = isset($_GET['parking']) ? $_GET['parking'] : 0;
                    $stars = isset($_GET['stars']) ? $_GET['stars'] : 0;
                    foreach ($hotels as $hotel) {
                        if(intval($stars) <= $hotel['vote'] || $stars == 0){
                            if (($parking == 'true' && $hotel['parking']) || ($parking == 'false' && !$hotel['parking']) || $parking == 0){
                                if ($hotel['parking']){
                                    $park = 'Si';
                                } else {
                                    $park = 'No';
                                };
                                echo '<tr>';
                                echo '<td>'.$hotel['name'].'</td>';
                                echo '<td>'.$hotel['description'].'</td>';
                                echo '<td>'.$park.'</td>';
                                echo '<td>'.$hotel['vote'].'</td>';
                                echo '<td>'.$hotel['distance_to_center'].'</td>';
                                echo '</tr>';
                            }    
                        }        
                    };
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>