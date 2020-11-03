<html>
    <head>

    </head>
    <body>
        <?php
            $i=0;
            $tableau[$i];
                for($i = 0; $i < 5; $i ++)
                    {
                        $tableau[$i] = rand ( 0 , 100 ); //mise en place des chiffres
                    }
                echo '<table border="1">';
                echo "<tr>";
                $i=0;   //i revien a 0 pour la seconde boucle
                    for($i = 0; $i < 5; $i ++)
                        {
                            echo '<td>';
                            echo $tableau[$i];  //afficher tableau
                            echo '</td>';
                        }
                    echo '</tr>';
                    echo "</table>";


        highlight_file(__FILE__);
        ?>

        <!--Boutton retour page-->
        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>
    </body>
</html>
