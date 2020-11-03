<html>
    <head>

    </head>
    <body>
            <?php
                $A = 3;
                $B = 6;
                $C = -10;
                $delta=0;
                $S1=0;
                $S2=0;


                $delta = $B * $B - 4 * $A * $C;   //$B²-4*$A*$C

                if($delta>0)
                    {
                        echo "L'équation a 2 solutions réelles : ";
                        $S1 = (-$B - sqrt($delta)) / 2*$A;
                        $S2 = (-$B + sqrt($delta)) / 2*$A;
                        echo $S1. " et " .$S2;
                    }
                elseif($delta==0)
                    {
                        echo "L'équation a 1 solution réelle : ";
                        $S1 = -$B / 2*$A;
                        echo $S1;
                    }
                elseif($delta<0)
                    {
                        echo "L'équation n'a pas de solution réelle : ";
                    }

                highlight_file(__FILE__);
            ?>

        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>
    </body>
</html>