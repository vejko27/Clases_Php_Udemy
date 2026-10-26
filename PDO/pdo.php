<?php
//Conectarnos a base de datos

$id = $_GET['id'];
try{
//codigo
$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos','root','root');
// echo ' Conexión Exitosa ';
//Ahora vamos hacer consultas preparadas Prepared Statements
//Esto sirve para que el usuario no pueda inyectar código
$statement = $conexion -> prepare('select *from usuarios where id = :id');
$statement -> execute(
    array(':id'=> $id));

    $resultados = $statement->fetch();
    // print_r($resultados);
    echo "<pre>";
    print_r($resultados);
    echo "<pre>";

//Metodo Query
// $resultados = $conexion -> query("select *from usuarios where id = $id");
//Esto es para visualizar datos
// foreach($resultados as $fila){

//     echo $fila ['ID'] . ' - ' . $fila['nombre']  . ' <br/> ' . ' <br/> ' ;

// }

}catch(PDOException $e){
  //Mostrar error aquí
 echo 'Error: ' .$e->getMessage();

}



?>