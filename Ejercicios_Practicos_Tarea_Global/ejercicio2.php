<?php
//21–40: Condicionales, ciclos y lógica de control

//Ejercicio 21.	Crea un if que verifique si un número es mayor a 10.

// $n1 = 11;

// if($n1 > 10){
//     echo" El número es mayor a 10";
// }

//Ejercicio 22.	Crea un if/else que determine si eres mayor de edad.

// $mayor_de_edad = 18;

// if ($mayor_de_edad >= 18){
//     echo 'Es mayor de edad';
// }else{
//     echo'Es menor de edad';
// }

//Ejerciocio 23.	Crea un switch que evalúe un día de la semana.

// $dia = 'Martes';

// switch($dia){
//     case "Lunes":
//         echo 'Inicio de la semana';
//         break;

//         case "Martes":
//         echo 'Segundo día de la semana';
//         break;

//         case "Miercoles":
//         echo 'Tercer día de la semana';
//         break;

//         case "Jueves":
//         echo 'Cuarto día de la semana';
//         break;

//         case "Viernes":
//         echo 'Quinto día de la semana';
//         break;

//         case "Sábado":
//         echo 'Inicio de fin de semana';
//         break;

//         case "Domingo":
//         echo 'Ultimo día de la semana';
//         break;

//         default: 

//         echo 'Día no válido';
// }

//Ejerciocio 24.	Usa un for para imprimir los números del 1 al 10.

// for ($i = 0 ; $i <=10; $i ++){

// echo $i . '<br/>';
// }
     
//Ejerciocio 25.Crea un if/else que determine si eres mayor de edad.
// $edad= 18;

// if ($edad >= 18){
//     echo 'Eres Mayor de edad <br/>';
// }else{
//     echo 'Eres Menor de edad <br/>';

// }

//Ejercicio 26: Crea un switch que evalué un día de la semana

// $dia = 2;

// switch($dia){

//       case 1:
//         echo 'Lunes';
//         break;

//         case 2:
//             echo 'Martes';
//             break;

//             case 3:
//                 echo'Miercoles';
//                 break;


// }

//Ejercicio 27: Usa FOR para imprimir los números del 10 al 1

// for($i = 10; $i>= 1; $i-- ){
//     echo $i . '<br/>';
// }

//Ejercicio 28: Usa while para imprimir los números del 10 al 1.
// $i=1;
// while ($i <= 10){
//         echo $i . '<br/>';
//         $i++;
// }
    
//Ejercicio 29:	Usa un foreach para recorrer un arreglo de frutas.
// $frutas = ['mango','naranjas','platanos','fresas'];

// echo '<h3>Todas las frutas</h3>';

// foreach($frutas as $fruta){
//     echo $fruta . '<br/>'. '<br/>';    
// }

// echo '<hr>';

// echo '<h3>La fruta que tu deseabas ver a parte era:</h3>';
// echo $frutas[2];
//Ejerciocio 30:Crea un if que verifique si un arreglo está vacío.

// $variable='';

// if(empty($variable)){
//     echo 'La variable está vacía';
// }else{
//     echo 'La variable contiene data';
// }

//Ejercicio 30: Crea un ciclo que sume los números de un arreglo.
//Ejercicio 31: Crea un ciclo que cuente los números pares
// $numeros =[1,2,3,4,5,6];

// $suma = 0;
// $sumaNumerosPares = 0;

// foreach($numeros as $numero){
 
//     // $suma += $numero;  
//     //Ejercicio 31.
//     if($numero % 2 == 0){
//         echo 'El número ' . $numero . '  es par <br>';
//         $sumaNumerosPares += $numero;
//     } 
// }

// // echo 'La sumatoria de todos estos números es: ' . $suma;
// echo 'La suma de números pares de este arreglo es: '
// .$sumaNumerosPares;

//Ejercicio 32: Crea un ciclo que imprima solo los números 
//mayores a 50

// $numeros=[10,20,50,80,60,15,23,35,200];
// $encontrados = 0;

// foreach($numeros as $numero){

//          if($numero >= 50){
//          echo 'Estos números son mayores a 50 de este arreglo:  ' . $numero. '<br/>';
//          $encontrados++;
//          }
// }
  // Ejercicio 33: Crea un switch que muestre un mensaje la nota (A,B,C)
  //Funciona en el terminal de visual code.
//   $nota = readline('Ingrese la nota (A,B o C): ');
//   switch(strtoupper($nota)){

//     case 'A':
//     echo 'Excelente trabajo';
//     break;

//      case 'B':
//      echo 'Buen trabajo';
//      break;

//       case 'C':
//       echo 'Hay mucho por mejorar';
//       break;

//        default:
//        echo 'Nota no Válida';
//        break;
//   }


//Ejercicio 34: Crea un IF que verifique si un número es positivo
//negativo o cero

// $numero = -1;

// if($numero > 0 ){
//     echo 'El número es positivo';
// }elseif($numero < 0){
//     echo 'El número es negativo';
// }else{
//     echo 'El número es Cero';
// }

//Ejercicio 35: Crea un ciclo que imprima los 
//elementos de un arreglo asociativo.

// $datos_personales =['Nombre'=>'Victor Omar',
//  'Apellido' => 'Canova Talledo', 
//  'Número Móvil'=>'980683910'];

//   foreach($datos_personales as $clave => $valor){
//      echo $clave . '  :   ' . $valor . '<br/>'. '<br/>';
//  }
// //Ejercicio 36: Crea un ciclo que imprima los 
// //índices y los valores de un arreglo asociativo.
// echo '<br/>'.' Aplicaremos el ejercicio 36 con los datos del 35: ' .'<br/>'.'<br/>';

// foreach ($datos_personales as $indice => $valor){

//       echo ' Índice:   '. $indice . '<br/>';
//       echo ' Valor:    ' . $valor .'<br><br>';
      
// }
//Crea un for con la tabla de multiplicar de 7

echo '<h3>Tabla del 7</h3>';

for($i = 0 ;$i <=12; $i++ ){

     echo '7 x ' .$i. ' = ' .(7*$i).' <br> ';

}



?>





