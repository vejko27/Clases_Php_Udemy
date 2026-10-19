<?php
if(isset($_COOKIE['font-size'] )) {
    $tamaño = htmlspecialchars($_COOKIE['font-size']);

}else{
    $tamaño ='15px';
}
?>
<!---------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>

    <style>
     p {
        font-size: <?php echo $tamaño; ?>;
     }


    </style>


</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nesciunt error inventore. Dignissimos mollitia nostrum veritatis animi iure quod? Nihil ratione, quam omnis ex eum a. Accusamus dolorum perferendis illo?</p>
</body>
</html>