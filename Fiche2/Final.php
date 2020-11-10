<html>
    <head>

    </head>
    <body>

        <?php
            include "Liste_Fonction.php";

            $recupMDP;
                    
                //récupération de la valeur entré

            $recupMDP=$_POST['MDP'];

            if($recupMDP != '1234')
            {
                //afficher formulaire de base
                $phrase='Veuillez entrer (à nouveau) votre Mot de Passe :';
                formulaire($phrase);
            } elseif($recupMDP == '1234')
            {
                // cacher formulaire + afficher lien
                $phrase = 'Mot de passe valide, voici le lien :';
                correct($phrase);
            }
        ?>



    </body> 
</html>

<!-- Afficher formulaire par défaut -->
<!-- lorsque mdp est pas rentré / pas bon : afficher formulaire -->
<!-- lorsque MDP bon : cacher formulaire avec lien vers autre page