<?php
$camisa = readline("cuantas camisas compró: ");
$valorcamisa = 30000;
$total = ($camisa >= 3 ) ? "tiene descuento 20% " : "tiene descuento del 10% " ;
echo $total;
echo "\n";
if($total = "tiene descuento 20%" ) {
    $te = ($valorcamisa * $camisa)-($valorcamisa * $camisa * 0.2);
    echo "total de la compra $te";

}else{
    $ye = ($valorcamisa * $camisa) - ($valorcamisa * $camisa * 0.1);
    echo "total de la compra $ye";
}