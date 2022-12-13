<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {background-color: rgb(23, 23, 23); font-size: 22px; color: white;}
    div  {margin-left: 200px; margin-right: 200px; margin-bottom: 25px}
    h1   {color: red;}
    </style>

</head>
<body>

    <?php
    $testo = 'La Ferrari è il marchio italiano più famoso nel mondo, sinonimo di potenza, velocità, design, stile, bellezza e successo. Basti pensare che il marchio Ferrari è stato eletto come il più influente al mondo. Fondata da Enzo Ferrari nel 1947 a Maranello, produce automobili sportive e da corsa di grandissima qualità. Le origini sportive risalgono quando Enzo Ferrari diede origine a Modena alla Scuderia Ferrari. E impegnata, fin dalla prima edizione, in Formula 1. La Ferrari etiene il record di titoli nel Campionato del Mondo di Formula 1. Tra i suoi piloti ha avuto grandi nomi del calibro di Alboreto, Schumacher, Alonso, Andretti, Ascari, Fangio, Farina, Prost, Lauda, Villeneuve, Vettel. Ferrari significa Italia!';

    $censura = $_GET['censura'];

    $testoCensura = str_ireplace($censura, '***', $testo);

    ?>

    <h1 style="text-align:center;">La storia della Ferrari</h1>
    <div> <?php echo $testoCensura ?></div>
    
    <div style="text-align:center;">La parola che hai voluto censurare è <?php echo $censura;?></div>

    <div style="text-align:center;">Il testo è lungo <?php echo strlen($testoCensura );  ?> caratteri</div>

    <form method="GET" action="" style="text-align:center;">
        <label for="censura">Inserisci la parola che vuoi censurare</label>
        <input type="text" id="censura" name="censura">
        <button>Censura testo</button>
    </form>

    
</body>
</html>