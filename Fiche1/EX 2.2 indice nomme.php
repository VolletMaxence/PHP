<html>
    <head>

    </head>
    <body>
        <?php
            $formulaire = array ("Max", "Vol", "XYZ");


            echo '<table border="1">';
                echo '<tr>';
                    echo '<th scope="col"> Nom </th>';
                    echo '<th scope="col"> Prénom </th>';
                    echo '<th scope="col"> MDP </th>';
                echo '</tr>';

                echo '<tr>';
                    echo '<td>';
                    echo $formulaire[0];
                    echo '</td>';

                    echo '<td>';
                    echo $formulaire[1];
                    echo '</td>';

                    echo '<td>';
                    echo $formulaire[2];
                    echo '</td>';

                echo '</tr>';
            echo '</table>';


            highlight_file(__FILE__);
        ?>

        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>
    </body>
</html>