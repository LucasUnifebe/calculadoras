<?php

include ('./index.php');

if ($_POST) {
    $va1 = $_POST['Valor1'];
    $va2 = $_POST['Valor2'];
    $op = $_POST['operacao'];


    if ($op == 'Somar'& $va1 != null& $va2 != null) {
        $total = $va1 + $va2;
        echo "<h1 class=\"negrito\">Total é: <span class=\"normal\"> $total</span></h1>";
    }
    else if ($op == 'Subtrair'& $va1 != null& $va2 != null) {
        $total = $va1 - $va2;
        echo "<h1 class=\"negrito\">Total é: <span class=\"normal\"> $total</span></h1>";
    }
    else if ($op == 'Multiplicar'& $va1 != null & $va2 != null) {
        $total = $va1 * $va2;
        echo "<h1 class=\"negrito\">Total é: <span class=\"normal\"> $total</span></h1>";
    }
    
    
    
     else if ($op == 'Dividir' & $va1 != 0& $va2 != 0) {
        $total = $va1 / $va2;
        echo "<h1 class=\"negrito\">Total é: <span class=\"normal\"> $total</span></h1>";
    }
    else{ 
        echo "<h1 class=\"negrito\">██Você não digitou um numero ou está tentando dividir por 0! <:)██: <span class=\"normal\"></span></h1>";}
       
}

?>
