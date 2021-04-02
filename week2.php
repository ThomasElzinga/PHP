<?php
    

    $naam = "Thomas Elzinga";

    

    echo $naam;
    
    echo "<br>";

    echo strtolower("${naam}");

    echo "<br>";

    echo strlen("${naam}");


    echo "<br>";

    echo ucwords($naam);

    echo "<br>";

    $klinker = "E";
    echo "de E staat op positie " .strpos($naam,  $klinker);


    echo "<br>";

    echo "Naam zonder spaties: " .str_replace(" ", "_", $naam);

    echo"<br>";
    
    echo "de E staat op positie " .strpos($naam,  $klinker);
 


?>  
