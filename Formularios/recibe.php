<?php
// NO pongas nada antes de este <?php
//POST es mas seguro para no estar enviando contraseñas o datos sencibles.

// if($_POST){
//     $nombre   = $_POST['nombre'] ?? '';
//      $sexo     = $_POST['sexo'] ?? 'no especificado';
//      $year     = $_POST['year'] ?? '';
//      $terminos = $_POST['terminos'] ?? 'no aceptó';

//     echo 'Hola, ' . $nombre . ' eres ' . $sexo;


// }else{
//     header('Location: http://localhost/Clases_Php_Udemy/Formularios/index.php');
//    exit;    
//  }


/*Ahora vamos a ver metodo GET, nos permite obtener
toda la información por medio de la URL, el usuario puede cambiar estos valores
El método GET solo lo vamos a usar cuando queremos usar información y mostrarla.
*/

// print_r($_GET);
if(!$_GET){
    header('Location: http://localhost/Clases_Php_Udemy/Formularios/index.php');
}
//Nos falta validar en caso que no llene datos y lo hacemos de la sgte manera.
$nombre   = $_GET['nombre'];
$sexo     = $_GET['sexo'];
$year     = $_GET['year'];
$terminos = $_GET['terminos'];
//Este codigo es para validar que datos no ha llenado y le ponemos condicionales.
if($nombre){
   echo $nombre . '<br/>';
}else{
    echo "El usuario no estableció nombre <br>";
}

echo $sexo   . '<br/>';
echo $year   . '<br/>';
echo $terminos . '<br/>';
/*
Ahora hay comandos que evitan que un super usuario meta código en nuestra
URL
*/
// echo htmlspecialchars($nombre);

//Ahora como hacemos para validar que el usuario no ha llenado data de 
//nuestro formulario?

?>




