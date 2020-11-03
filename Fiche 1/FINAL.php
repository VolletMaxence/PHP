<html>
    <head>

    </head>
    <body>
        <?php
            session_start(); // commencer la session
            $_SESSION['acces'] = false;

        
            echo '<form action="FINAL.php"
                method="POST"           
                name="login">
            <label for="texte"> Inserez votre login : </label>
            <input type="texte" name="login">';

            echo '<form action="FINAL.php"
                method="POST"               
                name="MDP">
            <label for="texte"> Inserez votre mot de passe : </label>
            <input type="texte" name="MDP">';

            echo '<button name="valider"
                type="submit"
                value="OK">
                validez vos identifiant
            </button>';
        

            $hash=1234;

            //LOGIN pas correct : afficher formulaire avec message d'erreur sur case LOGIN
            if (isset($_POST['login']) == ("Julien")) {
                echo "Login correct";
            } else {
                echo "Login incorrect";
            }

            //MPD pas correct : afficher formulaire avec message d'erreur sur case MDP
            if (isset($_POST['MDP']) != ("1234")) {
                 echo "mot de passe non valide";
            } else {
                echo "mot de passe valide";
            }
            $password = $_POST['MDP']; //erreur
            $hashed_password = password_hash($password, $hashed_password); //erreur

            // MDP / LOGIN bon : cacher formulaire + message bienvenue
            if(isset($_POST['login']) == "Julien" && (password_verify ('1234', $hash))) {
                echo "Bienvenue sur le site";
            }


            highlight_file(__FILE__);
        ?>


    </body>
</html>