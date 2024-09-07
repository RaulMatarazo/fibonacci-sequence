<?php
    function fibonacci (){
        $n = $_POST['number'];
        $cont = 2;
        $elemento = 1;
        $n1 = 1;

        if ($n == 1) {
            echo $n1;
        } else{
            echo " [$n1] ";
            while ($cont <= $n) {
                echo " [$elemento] ";
                $cont++;
                $elemento = $n1 + $elemento;
                $n1 = $elemento - $n1;
            }
        }
    }
?>