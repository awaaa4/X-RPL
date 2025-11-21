<?php 

    class Calculator{
        function penjumlahan(){
            echo "penjumlahan";
        }
        function pengurangan(){
            echo "pengurangan";
        }
        function perkalian(){
            echo "perkalian";
        }
        function pembagian(){
            echo "pembagian";
        }
        
    }


    $calculator = new calculator();
    $calculator->penjumlahan();
    $calculator->perkalian();
    $calculator->pengurangan();
    $calculator->pembagian();

?>