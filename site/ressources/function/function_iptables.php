<?php
	

	function affichage($rep_incomp, $rep_enonce){
		$option=[];
		$tmp=[];
		$i=0;
		$j=0;
		foreach ($rep_incomp as $valeur) {
			if ($valeur == NULL){
				array_push($tmp, $i);
				array_push($option, $rep_enonce[$tmp[$j]]);

				$j+=1;
			}

			$i+=1;
		}
		$option_shuffle=array_unique($option);
		foreach ($rep_incomp as $value) {
			shuffle($option_shuffle);
		 	if ($value == NULL){
		 		echo "<select name = reponse[]>";
		 		foreach ($option_shuffle as $val) {
                	echo"<option>$val</option>";    
		 		}
		 		echo "</select>";                       
		 	}
		 	else{
		 		echo " $value ";
		 	}
		}

		return $option;
	}


	function voir_rep($rep_enonce){
		echo "<center><h3 class='panel-title'>";
		foreach ($rep_enonce as $value) {
			echo " $value ";
			
		}
		echo "</h3></center>";
	
	}




	function valider($rep_enonce,$rep_incomp, $reponse){
		$i=0;
			foreach ($rep_incomp as $key => $value) {
			if ($value == NULL) {
				$rep_incomp[$key] = $reponse[$i];
				$i+=1;
			}
		}
		//print_r($rep_incomp);
		if ($rep_enonce == $rep_incomp){
			echo'<div class="alert alert-success alert-dismissible text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>';
			echo 'Réponse correcte !<br></div>';
		}else{
        	echo'<div class="alert alert-danger alert-dismissible text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>';
            echo 'Erreur !<br></div>';
		}
	}





	$enonce = "Un énoncé généré aléatoirement";
	$rep_enonce = ["iptables", "-A", "FORWARD", "-j", "blabla", "<br> <br>",  "iptables", "-N", "FORWARD", "-j", "blabla"];
	$rep_incomp = ["iptables", NULL, "FORWARD", NULL, "blabla", "<br> <br>",  "iptables", NULL, "FORWARD", NULL, "blabla"];


?>


