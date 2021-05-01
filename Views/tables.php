<?PHP
	include "../controller/TypeReclamationC.php";
	include "../controller/ReclamationC.php";
  include "../controller/platC.php";
	include "../controller/ingredientC.php";
  $platC=new platC();
$listeplat =$platC->afficherplat();

$ingredientC=new ingredientC();
$listeingredient =$ingredientC->afficherIgd();


  $TypeReclamationC=new TypeReclamationC();
$listeTypeReclamation =$TypeReclamationC->afficherTypeReclamation();

$ReclamationC=new ReclamationC();
$listeReclamation =$ReclamationC->afficherReclamation();
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PointBIO
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
 
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">

      <div class="logo">
        
      </div>
     
      <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">


      
         
<li >
  <a href="./AjouterTypeReclamation.php">
    <i class="now-ui-icons files_single-copy-04"></i>
    <p>Type de Reclamation</p>
  </a>
</li>
<li >
<a href="./AfficherReclamation.php">
    <i class="now-ui-icons ui-1_email-85"></i>
    <p>réclamation</p>
  </a>
</li>

<li >
  <a href="./AdminProfile.php">
    <i class="now-ui-icons users_single-02"></i>
    <p>Profil</p>
  </a>
</li>

<li >
  <a href="./AfficherAdmins.php">
    <i class="now-ui-icons users_single-02"></i>
    <p>Admins</p>
  </a>
</li>

<li >
  <a href="./AfficherClients.php">
    <i class="now-ui-icons users_single-02"></i>
    <p>Clients</p>
  </a>
</li>

<li >
<a href="./AfficherCartes.php">
<i class="now-ui-icons business_money-coins"></i>
    <p>Cartes Fidelités</p>
  </a>
</li>
<li>
<a href="./Rechercher_Table.php">
    <i class="now-ui-icons ui-1_calendar-60"></i>
    <p>Réservation de table</p>
  </a>
</li>

<li>
  <a href="./AfficherCategoriesTable.php">
    <i class="now-ui-icons design_app"></i>
    <p>Type de table</p>
  </a>
</li>

<li>
  <a href="./Ajouterproduit.php">
    <i class="now-ui-icons shopping_box"></i>
    <p>Produits</p>
  </a>
</li>

<li>
  <a href="./AjouterOffres.php">
    <i class="now-ui-icons business_money-coins"></i>
    <p>offres</p>
  </a>
</li>
<li>
  <a href="./AjouterIngredient.php">
    <i class="now-ui-icons files_paper"></i>
    <p>Ingrédients</p>
  </a>
</li>

<li>
  <a href="./AjouterPlat.php">
    <i class="now-ui-icons emoticons_satisfied"></i>
    <p>Plats</p>
  </a>
</li>

<li class="active">
  <a href="./tables.php">
    <i class="now-ui-icons design_bullet-list-67"></i>
    <p>Liste des tables</p>
  </a>
</li>


<li >
  <a href="./Main.php">
    <i class="now-ui-icons gestures_tap-01"></i>
    <p>www.PointBio.com</p>
  </a>
</li>
</ul>

        
      </div>




    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Table de types de réclamation</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">Identifiant</th>
				<th class="text-center">Libellé</th>
				<th class="text-center">Durée maximale de traitement de la réclamation</th>
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeTypeReclamation as $TypeReclamation)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $TypeReclamation["Id_type"] ?></td>
					<td class="text-center"><?PHP echo $TypeReclamation['Libelle']; ?></td>
					<td class="text-center"><?PHP echo $TypeReclamation['Duree_traitement_max']; ?></td>
     
				</tr>
			<?PHP
				}
			?>

                    <tbody>              
                  </table>
                </div>
              </div>
            </div>
          </div>






          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table de réclamation</h4>
              
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class="text-center">
                      <th>
                        Identifiant
                      </th>
                      <th class="text-center">
                        Description
                      </th>
                      <th class="text-center">
                        Proposition
                      </th>
                      <th class="text-center">
                        Note
                      </th>
                      <th class="text-center">
                        Type
                      </th>
                      <th class="text-center">
                        Identifiant du client
                      </th>
                      <th class="text-center">
                        Etat de traitement
                      </th>
                 
                    </thead>






                    <tbody>
                    
                    <?PHP
				foreach($listeReclamation as $Reclamation)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Reclamation["Id_Recl"] ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Description']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Proposition']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation["Note"] ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Type']; ?></td>
          <td class="text-center"><?PHP echo $Reclamation['Id_client']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Etat_traitement']; ?></td>
    
          
				</tr>
			<?PHP
				}
			?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Table des plats</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                    <th class="text-center">  &nbsp;&nbsp;Identifiant de plat</th>
				<th class="text-center">nom de plat</th>
        <th class="text-center">type de plat</th>
				<th class="text-center">prix de plat</th>
        <th class="text-center">nombre de calorie par plat</th>
				<th class="text-center">poids d'une portion</th>
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeplat as $plat)
        {
			?>
				<tr>
        <td class="text-center"><?PHP echo $plat["Id_plat"] ?></td>
					<td class="text-center"><?PHP echo $plat['Nom_Plat']; ?></td>
					<td class="text-center"><?PHP echo $plat['Type_plat']; ?></td>
          <td class="text-center"><?PHP echo $plat['Prix_plat']; ?></td>
					<td class="text-center"><?PHP echo $plat['Nbr_Clri_plat']; ?></td>
          <td class="text-center"><?PHP echo $plat['Pds_Portion_plat']; ?></td>
     
				</tr>
			<?PHP
				}
			?>

                    <tbody>              
                  </table>
                </div>
              </div>
            </div>
          </div>






          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Table des ingredients</h4>
              
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class="text-center">
                    <th class="text-center">  &nbsp;&nbsp;Identifiant d'ingredient</th>
				<th class="text-center">nom d'ingredient'</th>
        <th class="text-center">type d'ingredient'</th>
				<th class="text-center">prix d'ingredient</th>
     
                 
                    </thead>






                    <tbody>
                    
                    <?PHP
				foreach($listeingredient as $ingredient)
        {
			?>
				<tr>
        <td class="text-center"><?PHP echo $ingredient["Id_Igd"] ?></td>
					<td class="text-center"><?PHP echo $ingredient['Nom_Igd']; ?></td>
					<td class="text-center"><?PHP echo $ingredient['Type_Igd']; ?></td>
          <td class="text-center"><?PHP echo $ingredient['Prix_Igd']; ?></td>
    
          
				</tr>
			<?PHP
				}
			?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>








        </div>
      </div>


    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>

</body>

</html>