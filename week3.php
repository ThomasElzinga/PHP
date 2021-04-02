<?php
    $gewicht = 70; //kg
    $lengte = 1.70; //m

    $uitkomst = round($gewicht / ($lengte * $lengte), 2);

    if ($uitkomst < 15.00){
        echo "te licht.";
    } elseif ($uitkomst < 18.51){
        echo "Licht.";
    } elseif ($uitkomst < 26){
        echo "Prima.";
    } elseif ($uitkomst < 38){
        echo "Zwaar.";
    } else{
        echo "veel te zwaar";
    }


?>