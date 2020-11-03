<html>
    <head>
        <link rel="stylesheet" href=EX_1_Condition.css>
    </head>
    <body>
        <form action="EX_5_Formulaire_et_methode_POST.php" 
              method="post" 
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

            if(isset($_POST['valider'])) {
                $text=$_POST['texte'];
                echo  "<div class=rouge>". $text. "</div>" ;
            }
        
            highlight_file(__FILE__);
        ?>
    </body>
</html>