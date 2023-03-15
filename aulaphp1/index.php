<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>Document</title>
</head>
<body>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
       echo "Ola munhdo ";
        echo date("D, d/m/Y");

       $numero = 10; 
       $numero2 = 11;
       $soma  = $numero + $numero2;

      // echo "<h2> ".$soma." </h2>";


     
       $x = 5;
       $y = 10;
       
       function myTest() {
         global $x, $y;
         $y = $x + $y;
       }
       
       //myTest();
       echo "<hr>";
     //  echo $y; // outputs 15
       
       $x = 0011;
       echo $x;
       echo "<hr>";
       var_dump($x);
       echo '<hr>';
       echo rand($x,100);
       
       define("PI",3.1416);
       echo PI;
       echo '<hr>';

       $texto = "boa noite";

       $texto.=" Classe";
       $texto.=" como voces estão indo? ";

       echo $texto;

       $t = date("H");

       if ($t < "20") {
         echo "Have a good day!";
       } else {
         echo "Have a good night!";
       }


    ?>

    <table>
        <tr>
            <th>Data comemorativa </th>
            <th>Data</th>
        </tr>
        <tr>
            <td>Dia internacional do 𝝅 </td>
            <td><?=date(" d/m/Y")?></td>
        </tr>


    </table>
</body>
</html>