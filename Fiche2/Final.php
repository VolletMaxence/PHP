<html>
    <head>

    </head>
    <body>

        <?php
            include "Liste_Fonction.php";

            //affichage formulaire par défault
            $verif=2;

            if($verif=2)
            {
                $phrase='Veuillez entrer votre Mot de passe';
                formulaire($phrase); //formulaire : boutton qui change la valeur de $verif
            }

            if(!isset($_POST['MDP']) == "1234");
            {
                $verif=1;
            } 
            if(!isset($_POST['MDP']) !== "1234");
            {
                $verif=0;
            }

            if($verif=0)
            {
                //afficher formulaire + message d'erreur
                $phrase='Mod de Passe éroné, veuillez l entré a nouveau :';
                formulaire($phrase);

            } elseif($verif=1)
            {
                // cacher formulaire + afficher lien
                $phrase = 'Mot de passe valide, voici le lien :';
                
            }
        ?>

        <li> 
            <a href="index.html"> 
                Retour à la page index 
            </a> 
        </li>

    </body>
</html>

<!-- Afficher formulaire par défaut -->
<!-- lorsque mdp est pas rentré / pas bon : afficher formulaire -->
<!-- lorsque MDP bon : cacher formulaire avec lien vers autre page