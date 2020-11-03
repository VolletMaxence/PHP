<html>
    <head>
        <link rel="stylesheet" href=EX_1_Condition.css>
    </head>
    <body>
        <?php
            $NombreAleatoire = rand ( 0 , 100 );    //nbr aléatoire

            if($NombreAleatoire%2 == 1)
                {
                    echo "<div class=impair>".$NombreAleatoire." est un nombre impair \n </div>";
                } 
            else
                {
                    echo "<div class=pair>".$NombreAleatoire." est un nombre pair \n </div>";
                }
            highlight_file(__FILE__);
        ?>

        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>
    </body>
</html>