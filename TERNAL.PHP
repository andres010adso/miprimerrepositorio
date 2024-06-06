<?php
$camisa = readline("cuantas camisas compro: ");
$valorcamisa = 30000;
$terna = ($camisa>3) ? "("$valorcamisa" * "$camisa" * "0.2")"  : "esta nulo";
echo $terna;