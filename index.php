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
//$parking = $_GET['parking'];
//$stars = $_GET['stars'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Hotel</h1>
    <form action="" method="get">
        <div>
            <label for="parking">
                Parcheggio
            </label>
        </div>
        <div>
            <input type="text" name='parking' id='parking'>
        </div>
        <div>
            <label for="stars">
                Stelle
            </label>
        </div>
        <div>
            <input type="number" name='stars' id='stars'>
        </div>
        <button>Invia</button>
    </form>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Stelle</th>
            <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $hotels[0]['name']?></td>
                <td><?php echo $hotels[0]['description']?></td>
                <td><?php
                    if ($hotels[0]['parking']){
                        $park = 'Si';
                    } else {
                        $park = 'No';
                    };
                    echo $park?>
                </td>
                <td><?php echo $hotels[0]['vote']?></td>
                <td><?php echo $hotels[0]['distance_to_center']?></td>
            </tr>
            <<tr>
                <th scope="row">2</th>
                <td><?php echo $hotels[1]['name']?></td>
                <td><?php echo $hotels[1]['description']?></td>
                <td><?php
                    if ($hotels[1]['parking']){
                        $park = 'Si';
                    } else {
                        $park = 'No';
                    };
                    echo $park?>
                </td>
                <td><?php echo $hotels[1]['vote']?></td>
                <td><?php echo $hotels[1]['distance_to_center']?></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><?php echo $hotels[2]['name']?></td>
                <td><?php echo $hotels[2]['description']?></td>
                <td><?php
                    if ($hotels[2]['parking']){
                        $park = 'Si';
                    } else {
                        $park = 'No';
                    };
                    echo $park?>
                </td>
                <td><?php echo $hotels[2]['vote']?></td>
                <td><?php echo $hotels[2]['distance_to_center']?></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><?php echo $hotels[3]['name']?></td>
                <td><?php echo $hotels[3]['description']?></td>
                <td><?php
                    if ($hotels[3]['parking']){
                        $park = 'Si';
                    } else {
                        $park = 'No';
                    };
                    echo $park?>
                </td>
                <td><?php echo $hotels[3]['vote']?></td>
                <td><?php echo $hotels[3]['distance_to_center']?></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td><?php echo $hotels[4]['name']?></td>
                <td><?php echo $hotels[4]['description']?></td>
                <td><?php
                    if ($hotels[4]['parking']){
                        $park = 'Si';
                    } else {
                        $park = 'No';
                    };
                    echo $park?>
                </td>
                <td><?php echo $hotels[4]['vote']?></td>
                <td><?php echo $hotels[4]['distance_to_center']?></td>
            </tr>
        </tbody>
    </table>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Stelle</th>
            <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($hotels as $key => $hotel) {
                    if ($hotel['parking']){
                        $park = 'Si';
                    } else {
                        $park = 'No';
                    };
                    echo '<tr>';
                    echo '<th scope="row">'.($key + 1).'</th>';
                    echo '<td>'.$hotel['name'].'</td>';
                    echo '<td>'.$hotel['description'].'</td>';
                    echo '<td>'.$park.'</td>';
                    echo '<td>'.$hotel['vote'].'</td>';
                    echo '<td>'.$hotel['distance_to_center'].'</td>';
                    echo '</tr>';
                };
            ?>
        </tbody>
    </table>
    <?php
    if (in_array('false', $hotels)){
        echo '<h1>Si</h1>';
        //echo $parking.$stars;
    }else {
        echo '<h1>No</h1>';
        //echo $parking.$stars;

    };
    
    ?>
</body>
</html>