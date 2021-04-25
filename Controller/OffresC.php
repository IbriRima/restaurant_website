<?php
    require_once '../config.php';

    class OffresC {
        public function afficherOffres() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM Offres'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }

        }


        public function addOffres($offres) {
            try {
               
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO Offres (Valeur,id_produit) 
                VALUES (:val,:idproduit)'
                
                );
               echo $offres->getIdproduit();
                $query->execute([

                    'val' => $offres->getValeur(),
                    'idproduit' => $offres->getIdproduit()


                    
                ]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        

        function updateOffres($offres, $id){
			try {
				$pdo = getConnexion();
				$sql="UPDATE offres SET 
				Valeur= :Valeur,
                id_produit= :id_produit
				
			WHERE Id_offres = :id";
				$query = $pdo->prepare($sql);

				$query->bindValue(':id',$id);
				$query->bindValue(':Valeur',$offres->getValeur());
				$query->bindValue(':id_produit',$offres->getIdproduit());

				$query->execute();
	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			
			} catch (PDOException $e) {
			
				die('Erreur: '.$e->getMessage());
			}
			
		}


	


		function deleteProduit($id){
			$sql="DELETE FROM offres WHERE id_offres= :id";
			$pdo = getConnexion();
			$req=$pdo->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}











     /*   function recupererTypeReclamation($id){
			$sql="SELECT * from TypeReclamation where id_type= $id";
			$pdo = getConnexion();
			try{
				$query=$pdo->prepare($sql);
				$query->execute();
				
				$TypeReclamation = $query->fetch(PDO::FETCH_OBJ);
				return $TypeReclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		



        public function TypeReclamation() 
        {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT Libelle FROM TypeReclamation'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }



    } */

}