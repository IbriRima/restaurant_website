<?PHP
	include "../Controller/ReclamationC.php";

	$ReclamationC=new ReclamationC();

	if (isset($_POST["Id_Recl"])&& isset($_POST["Etat_traitement"])){
		if($_POST["Etat_traitement"]=="Traitee")
		{
			$ReclamationC->deleteReclamation($_POST["Id_Recl"]);
			header('Location:AfficherReclamation.php');
		}
	
	}

?>