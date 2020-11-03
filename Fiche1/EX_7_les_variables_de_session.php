<html>
    <head>

    </head>
    <body>
        <?php
            session_start();
        ?>

        <form action="EX_7_les_variables_de_session.php" 
            method="post" 
          name="phrase">
        <label for="texte"> Entrez une phrase: </label>
        <input type="text" name="phrase">

        <button name="valider"
                type="submit"
                value="OK">
            validez votre entrée
        </button>

        <?php
            $_SESSION['nom']= $_POST['phrase'];

            if(isset($_SESSION['nom'])) {
                //se fait lorsque l'utilisateur a valider sa réponse
                echo $_SESSION['nom'];
            } else {

            }

            highlight_file(__FILE__);
        ?>

        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>

    </body>
</html>