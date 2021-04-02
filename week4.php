<!-- 
Thomas Elzinga
20DEV
19-3-2021
-->

<link rel="shortcut icon" type="image/x-icon" href="afbeeldingen/BMI-logo.webp">
<form action="" method="post" name="bmiform">
    <h1>BMI Berekenen</h1>
        
        <p>body-mass index(bmi)is een index die de verhouding tussen lengte en gewicht bij een persoon weergeeft. De BMI wordt veel gebruikt om een indicatie te krijgen of er sprake is van overgewicht of ondergewicht. </p>
        <label for="naam">Naam:</label>
        <br>
        <input type="text" id="naam" name= "naam" placeholder="vul hier je naam in">
        <br>
        <label for="leeftijd">Leeftijd:</label>
        <br>
        <input type="number" id="leeftijd" name= "leeftijd" placeholder="vul hier je leeftijd in">
        <br>
        <label for="geslacht">Geslacht:</label>
        <br>
        <!-- <input type="text" id="geslacht" name= "geslacht" placeholder="vul hier je geslacht in">   $naam = trim() -->
        <input type="radio" id="geslachtbmi" name="geslacht" value="man">
        <label for="geslachtbmi">Man</label>
        <input type="radio" id="geslachtbmi" name="geslacht" value="vrouw">
        <label for="geslachtbmi">Vrouw</label> 

        <br>
        <label for="lengte">lengte:</label>
        <br>
        <input type="float" id="lengte" name= "lengte" required min="0" max="2.5" placeholder="vul hier je lente in m in">
        <br>
        <label for="gewicht">Gewicht(in KG):</label>
        <br>
        <input type="number" id="gewicht" name= "gewicht" required min=6 max=130  placeholder="vul hier je gewicht in KG in">
        <br>
        <p>In welke BMI catogorie denk je te vallen?</p>

        <input type="radio" id="radiobmi" name="bmic" value="te licht">
        <label for="radiobmi">Te licht</label>
        <br>
        <input type="radio" id="radiobmi" name="bmic" value="licht">
        <label for="radiobmi">Licht</label>
        <br>
        <input type="radio" id="radiobmi" name="bmic" value="prima">
        <label for="radiobmi">Prima</label>
        <br>
        <input type="radio" id="radiobmi" name="bmic" value="zwaar">
        <label for="radiobmi">Zwaar</label>
        <br>
        <input type="radio" id="radiobmi" name="bmic" value="veel te zwaar">
        <label for="radiobmi">Veel te zwaar</label>
        <br>

        <button id="check" type="submit" name="submitbmi" value="Verstuur de gegevens">Verstuur de gegevens</button>

  
</form>
    

<?php
    $lengte = 0;
    $gewicht = 0;
    $bmic = "";
 
    if (!empty($_POST['lengte']) && !empty($_POST['gewicht']))
    {
        $lengte = $_POST['lengte'];
        $gewicht = $_POST['gewicht'];
        $naam = $_POST['naam'];
        $leeftijd = $_POST['leeftijd'];
        trim($lengte);
        trim($gewicht);
        trim($naam);
        trim($leeftijd);

        str_replace(",", ".", $lengte);

        is_numeric($gewicht);
        is_numeric($leeftijd);
        is_numeric($lengte);

        $bmi = round($gewicht/($lengte * $lengte), 2); 
        echo "<h4> Uw BMI is" , $bmi;
        echo "<br>";
         if ($bmi < 15.00){
            echo " Te licht.";
        } elseif ($bmi < 18.51){
            echo " Licht.";
        } elseif ($bmi < 26){
            echo " Prima.";
        } elseif ($bmi < 38){
            echo " Zwaar.";
        } else{
            echo "veel te zwaar";
        }
        
        if (!empty($_POST['bmic']))
        {
            $bmic = $_POST['bmic'];

            if ($bmic == 'te licht')
            {
                if ($bmi < 15.00){
                    echo " U bent inderdaad te licht u heeft meer voeding nodig";
                } elseif ($bmi < 18.51){
                    echo " U bent niet te licht maar u bent aan de lichte kant u heeft meer voeding nodig";
                } elseif ($bmi < 26){
                    echo " Prima U bent niet te licht u heeft een goed gewicht";
                } elseif ($bmi < 38){
                    echo " U bent niet te licht maar aan de zware kant";
                } else{
                    echo " U bent niet te licht u bent veel te zwaar.";
                }
            }
        }
               
        if (!empty($_POST['bmic']))
        {
            $bmic = $_POST['bmic'];

            if ($bmic == 'licht')
            {
                if ($bmi < 15.00){
                    echo " U bent niet licht maar u bent aan een te lichte kant u heeft meer voeding nodig";
                } elseif ($bmi < 18.51){
                    echo " U bent inderdaad licht u heeft meer voeding nodig";
                } elseif ($bmi < 26){
                    echo " Prima u bent niet licht u heeft een goed gewicht";
                } elseif ($bmi < 38){
                    echo " U bent niet licht maar aan de zware kant";
                } else{
                    echo "U bent niet licht maar u bent veel te zwaar ";
                }
            }
        }

        if (!empty($_POST['bmic']))
        {
            $bmic = $_POST['bmic'];

            if ($bmic == 'prima')
            {
                if ($bmi < 15.00){
                    echo " Uw bmi is niet goed u bent te licht u heeft meer voeding nodig.";
                } elseif ($bmi < 18.51){
                    echo " Uw bmi is niet goed u bent licht u heeft meer voeding nodig";
                } elseif ($bmi < 26){
                    echo " Prima uw bmi is goed ga zo door!";
                } elseif ($bmi < 38){
                    echo " Uw bmi is niet goed u bent aan de zware kant";
                } else{
                    echo " Uw bmi is niet goed u bent veel te zwaar";
                }
            }
        }

        if (!empty($_POST['bmic']))
        {
            $bmic = $_POST['bmic'];

            if ($bmic == 'zwaar')
            {
                if ($bmi < 15.00){
                    echo " U bent niet zwaar maar u bent te licht";
                } elseif ($bmi < 18.51){
                    echo " U bent niet zwaar maar u bent licht";
                } elseif ($bmi < 26){
                    echo " U bent niet zwaar maar u heeft een goed gewicht";
                } elseif ($bmi < 38){
                    echo " U bent inderdaad zwaar";
                } else{
                    echo " U bent niet zwaar maar u bent veel te zwaar";
                }
            }
        }

        if (!empty($_POST['bmic']))
        {
            $bmic = $_POST['bmic'];

            if ($bmic == 'veel te zwaar')
            {
                if ($bmi < 15.00){
                    echo " U bent niet veel te zwaar maar u bent te licht";
                } elseif ($bmi < 18.51){
                    echo "  U bent niet veel te zwaar maar u bent licht";
                } elseif ($bmi < 26){
                    echo " U bent niet veel te zwaar maar u heeft een goed gewicht";
                } elseif ($bmi < 38){
                    echo "  U bent niet veel te zwaar maar u bent te zwaar";
                } else{
                    echo " U bent inderdaad veel te zwaar </h4>";
                }
            }
        }

    }
    else 
    {
        // echo "<h1>BMI Berekenen</h1>"
        echo '<form action="" method="post" name="bmiform">';
    }




?>






<style type="text/css">

input, label, p, h1, h4{
    margin-bottom: 8px;
    color: rgba(164,222,232,255);  
    font-family: Arial, Helvetica, sans-serif;
}
#check {
    margin-top: 7px;
}
body {
background-color: rgba(57,162,187,255);                     /* rgb(128, 141, 143)*/
width: 1000px;
height: auto;
margin-left: 30px;
margin-top: 10px;
margin-bottom: 0px;
}

</style>