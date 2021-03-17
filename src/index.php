<?php

// fw = for who
function ordr_pizza($pizzatype, $guest_adress) {

    $type_pizza = $pizzatype;
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $price_pizza = calcul_cots($type_pizza);

    $address = 'unknown';

    switch ($guest_adress){
        case 'koen':
            $address = 'a peniche in Liège';
            break;
        case 'nico':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
            break;
    };
    $toPrint .= ' pizza should be sent to ' . $guest_adress . ". <br>The address: {$address}.";

    echo 'Creating new order... <br>';
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$price_pizza.'.<br>';
    echo "Order finished.<br><br>";
}

function calcul_cots($piz_type){
    $cost = 'unknown';

    switch ($piz_type){
        case 'marguerita':
            $cost = 5;
            break;
        case 'golden':
            $cost = 100;
            break;
        case 'calzone':
            $cost = 10;
            break;
    };

    return $cost;
}

function ordr_piz_all(){
    // $test= 0;
    ordr_pizza('calzone', 'nico');
    ordr_pizza('marguerita', 'nick');
    ordr_pizza('golden', 'students');
}

ordr_piz_all();