<?php
  session_start();

  define('LOGIN','Julien');  
  define('MDP','1234');  
  $message = '';      
 

  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    //si pas de login :
    if(empty($_POST['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      // si pas de MDP
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }

    //Vérif Login
    //Si les 2 valeurs sont fausses : 
    elseif($_POST['motDePasse'] !== MDP && $_POST['login'] !== LOGIN)
    {
      $message = 'Votre login et votre mot de passe sont faux ,veuillez réessayer';
    }
    //Si uniquement le login est faux :
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Le login n est pas reconnu';
    }
    //Si uniquement le MDP est faux :
      elseif($_POST['motDePasse'] !== MDP)
    {
      $message = 'Votre mot de passe est incorrecte';
    }
    //Si tout est bon : affichage "bienvenue" + boutton pour détruir session + cacher formulaire
      else
    {
      $message = 'Bienvenue !';
      echo '<button name="Logout"
      type="submit"
      value="session_destroy()">
      Se déconnecter
      </button>';

      if (isset($_POST['Logout']))
      {
        session_destroy();
      }
    }

     
  }
?>

<html>
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>
             <label for="login">Login :</label> 
            <input type="text" 
            name="login" 
            id="login" 
            value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p>



          <p>
            <label for="MDP">Mot de passe :</label> 
            <input type="MDP" 
            name="motDePasse" 
            id="MDP" 
            value="" /> 
            <input type="submit" 
            name="submit" 
            value="Identification" />
          </p>
    </form>

        <a href="../Page liste d exo PHP.html">
             Retour à la page index 
        </a>
  </body>
</html>