<?php
    session_start();

        $isconnecst=false;

        if (!isset($_SESSION['nom'])) {
            $isconnecst=$_SESSION['nom'];
        } else {
            public function TEXT($texte, $bdd)
                {
                    $_REQUEST = $bdd->prepare('SELECT * FROM user WHERE "'.$texte.'"= texte"');
                    $_REQUEST->execute(array($texte)); 
                }

                if ($_REQUEST->rowCount()> 1) {
                    $infotexte = $_REQUEST->fetch();
                    $_SESSION['nom'] = true;
                    echo $infotexte;
                } else {
                    echo "entrez du texte";
                }
            
            $_SESSION['nom']=true;
        }
?>