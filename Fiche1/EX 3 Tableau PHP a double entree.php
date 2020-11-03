<html>
    <head>

    </head>
    <body>
        <?php
            $personne1 = array ("Max", "Vol", "XYZ");   //array pour entrée toute info relative a la personne 1
            $personne2 = array ("Steve", "MC", "NOT");  //array pour entrée toute info relative a la personne 2
            $personne3 = array ("Alex", "CT", "TCH");   //array pour entrée toute info relative a la personne 3
            $personne4 = array ("Jak", "THG", "CSS");   //ajout d'une personne

            echo '<table border="1">';
            echo '<tr>';
                echo '<th scope="col"> Nom </th>';
                echo '<th scope="col"> Prénom </th>';       //indice des colonnes
                echo '<th scope="col"> MotDePasse </th>';
            echo '</tr>';

            echo '<tr>';
            for($i = 0; $i < 3; $i ++)
                        {
                            echo '<td>';
                            echo $personne1[$i];  //afficher info personne 1
                            echo '</td>';
                        }
            echo '</tr>';

            echo '<tr>';
            for($i = 0; $i < 3; $i ++)
                        {
                            echo '<td>';
                            echo $personne2[$i];  //afficher info personne 2
                            echo '</td>';
                        }
            echo '</tr>';
            
            echo '<tr>';
            for($i = 0; $i < 3; $i ++)
                        {
                            echo '<td>';
                            echo $personne3[$i];  //afficher info personne 3
                            echo '</td>';
                        }
            echo '</tr>';

            echo '<tr>';
            for($i = 0; $i < 3; $i ++)
                        {
                            echo '<td>';
                            echo $personne4[$i];  //afficher info personne 4
                            echo '</td>';
                        }
            echo '</tr>';

            highlight_file(__FILE__);
        ?>

        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>
    </body>
</html>