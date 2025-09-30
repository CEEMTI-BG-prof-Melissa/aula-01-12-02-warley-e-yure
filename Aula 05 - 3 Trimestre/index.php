<html>
    <head>
        <title> Aula 05 - PHP </title>
    </head>
    <body>
        <?php
          $num1= 2;
          $num2= $_GET["x"];

          echo "Os valores são $num1 e $num2. <br><br>";
          echo "O valor absoluto de $num1 é " .abs($num1);
          echo "<br><br>O número $num2 <sup>$num1</sup> é igual a " .pow($num2, $num1);
          echo "<br><br>A raiz quadrada de $num2 é igual a " .sqrt($num2);
          echo "<br><br>O valor arredondado de $num2 é igual a " .round($num2);
          echo "<br><br>O valor arredondado de $num2 é igual a " .ceil($num2);
          echo "<br><br>O valor arredondado de $num2 é igual a " .floor($num2);

        ?>
    </body>
</html>    
