<html>
    <head>

    </head>
    <body>

            <!-- fonction EX 1 -->

        <?php

        function tableau($p1, $p2, $p3)
        {
            echo '<table border="1">';

                echo '<tr>';
                    echo '<td>';
                    echo $p1;
                    echo '</td>';

                    echo '<td>';
                    echo $p2;
                    echo '</td>';

                    echo '<td>';
                    echo $p3;
                    echo '</td>';

                echo '</tr>';
            echo '</table>';

            return array ($p1, $p2, $p3);
        }


            highlight_file(__FILE__);

        ?>

            <!-- Fonction EX 2 -->

        <?php
            function coll($val1, $val2, $val3, $p1, $p2, $p3)
            {
                echo '<table border="1">';
                echo '<tr>';
                    echo '<th>'; 
                    echo $val1;
                    echo '</th>';

                    echo '<th>';
                    echo $val2; 
                    echo '</th>';

                    echo '<th>'; 
                    echo $val3; 
                    echo '</th>';
                echo '</tr>';

                echo '<tr>';
                    echo '<td>';
                    echo $p1;
                    echo '</td>';

                    echo '<td>';
                    echo $p2;
                    echo '</td>';

                    echo '<td>';
                    echo $p3;
                    echo '</td>';

                echo '</tr>';
            echo '</table>';

            return array ($val1, $val2, $val3, $p1, $p2, $p3);
            }
        ?>

            <!--Fonction EX 3 -->

        <?php
            function Moyenne ($tab)
            {
                
                $moyenne=$tab/6;

                return $moyenne;
            }
        ?>
            <!-- fonction pour ranger les valeurs dans un tableau -->
        <?php
            function tableau6 ($p1, $p2, $p3, $p4, $p5, $p6)
            {
                echo '<table border="1">';

                    echo '<tr>';
                        echo '<td>';
                        echo $p1;
                        echo '</td>';

                        echo '<td>';
                        echo $p2;
                        echo '</td>';

                        echo '<td>';
                        echo $p3;
                        echo '</td>';

                        echo '<td>';
                        echo $p4;
                        echo '</td>';

                        echo '<td>';
                        echo $p5;
                        echo '</td>';

                        echo '<td>';
                        echo $p6;
                        echo '</td>';

                    echo '</tr>';
                echo '</table>';

                $somme=$p1+$p2+$p3+$p4+$p5+$p6;

                return $somme;
            }
        ?>

            <!-- Fonction EX Final -->
        
        <?php
            function formulaire($phrase)
            {

                    //formulaire
                    echo '<form action="Final.php"
                    method="POST"               
                    name="MDP">';
                    
                    echo '<label for="texte">';
                    echo $phrase; 
                    echo '</label>
                    <input type="texte" name="MDP">';

                    //Boutton
                    echo '<button name="valider"
                    type="submit"
                    value="OK"
                    action="Final.php">
                    validez votre Mot de Passe
                    </button>';

            }
        ?>

        <?php
            function correct($phrase)
            {
                echo $phrase;
                echo '<a href="FINAL_secret.php"> Page secrète </a>';
            }
        ?>

        <li>    
            <a href="../Page liste d exo PHP.html"> 
                Retour à la page index 
            </a> 
        </li>

    </body>
</html>