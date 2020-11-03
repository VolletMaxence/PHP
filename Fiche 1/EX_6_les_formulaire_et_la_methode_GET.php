<html>
    <head>
        <link rel="stylesheet" href=EX_1_Condition.css>
    </head>
    <body>
        <form action="EX_6_les_formulaire_et_la_methode_GET.php" 
                  method="get" 
                  name="textes">
                <label for="texte"> Entrez une phrase: </label>
                <input type="text" name="texte">

            <button name="valider"
                    type="submit"
                    value="OK">
                validez votre entrée
            </button>

        <?php
            $text;

            if(isset($_GET['valider'])) {
                $text=$_GET['texte'];
                echo  "<div class=violet>". $text. "</div>" ;
            }
        
            highlight_file(__FILE__);
        ?>
    </body>
</html>