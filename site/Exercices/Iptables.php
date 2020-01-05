<?php
    $title="Iptables"; //Titre de la page
    require('../ressources/header.php');  //Inclusion du header et du menu
    //include_once('../ressources/connectBDD.php');
    include('../ressources/function/fonction_utilisateur.php'); //Inclusion des fonctions nécéssaires à l'ajout du résultat de l'exercice pour l'étudiant (réussi ou non) dans la base de données.
    include('../ressources/function/function_iptables.php');

?>
<div class="container">
    <h1>IpTables </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Exercice</h3>
        </div>
        <div class="panel-body">
            <div class="lead bg-info well">
                <p>Soit une entreprise qui utilise des adresses privée[...]</p>
            </div>
            <div class="panel panel-default">
                <div class="lead bg-info well">
                    <h3 class="panel-title">On veut assurer les éléments suivants:</h3>
                </div>
                <div class="panel-body">
                    <div class="lead bg-info well">
                        <?php /**/?>
                        <p><?php echo "$enonce"; ?> </p>
                        <br>
                        <form action="" method=post>
                            <h3 class='panel-title'>
                                <?php $option = affichage($rep_incomp,$rep_enonce); ?>
                            </h3>
                    </div>
                    <?php 
                        if(isset($_POST['rep'])){
                            voir_rep($rep_enonce);
                        }

                        if(isset($_POST['submit'])){
                            //print_r($option);
                            //print_r($_POST);
                            $reponse = $_POST["reponse"];
                            valider($rep_enonce,$rep_incomp,$reponse);      
                        }
                         
                    ?>
                </div> 
            </div>
        </div>
        <center>
            <div class="input-group-btn">
                <button type="submit" name="submit" value="submit" class="btn btn-success">Valider</button>
                </form>
                <form action="" method=post>
                    <button type="submit" name="rep" value="rep" class="btn btn-info" >Voir réponse</button>
                </form>
            </div>
        </center>
    </div>
</div>




<?php

    include("../ressources/footer.php");
?>



        