<?php
    require_once '../Models/EleveModel.php';
    require_once '../Models/MatiereModel.php';
    require_once '../Models/NoteModel.php';
    class DbAcces{
        private $conn;
        public function __construct($conn){
            $this->conn = $conn;
        }

        public function InsertionEleve($eleve){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO eleves(nom,prenom,date_naissance,numero,matricule,sexe,secteur,filiere,niveau) 
                VALUES('".$eleve->getNom()."','".$eleve->getPrenom()."','".$eleve->getDate_naissance()."','".$eleve->getNumero()."','".$eleve->getMatricule()."','".$eleve->getSexe()."','".$eleve->getSecteur()."','".$eleve->getFiliere()."','".$eleve->getNiveau()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function ListeEleve() {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM eleves");
                
                // Récupération des résultats
                $eleves = [];
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $eleves[] = new EleveModel(
                        $row["id"], 
                        $row["nom"], 
                        $row["prenom"], 
                        $row["date_naissance"], 
                        $row["numero"], 
                        $row["matricule"], 
                        $row["sexe"], 
                        $row["secteur"], 
                        $row["filiere"], 
                        $row["niveau"]
                    );
                }
        
                return $eleves; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        
        public function VerifierUtilisateur($utilisateur) {
            try {
                // Préparer la requête SQL pour éviter les injections SQL
                $requete = $this->conn->prepare("SELECT * FROM utilisateur WHERE uti = :util AND mdp = :modp");
                
                // Exécuter la requête en liant les paramètres
                $requete->execute([
                    ':util' => $utilisateur->getUti(),
                    ':modp' => $utilisateur->getMdp()
                ]);
                
                // Vérifier si une ligne correspond
                if ($requete->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        

        public function SupprimerEleve($id){
            try{
                $requete = $this->conn->query("DELETE FROM eleves WHERE id =".$id);
                return true;
            }catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function RecupererEleve($id) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM eleves where id =".$id);
                
                // Récupération des résultats
                $eleves = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $eleves = new EleveModel(
                        $row["id"], 
                        $row["nom"], 
                        $row["prenom"], 
                        $row["date_naissance"], 
                        $row["numero"], 
                        $row["matricule"], 
                        $row["sexe"], 
                        $row["secteur"], 
                        $row["filiere"], 
                        $row["niveau"]
                    );
                }
        
                return $eleves; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function ModifierEleve($eleve) {
            try {
                $requete = $this->conn->prepare("UPDATE eleves SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, numero = :numero, matricule = :matricule, sexe = :sexe, secteur = :secteur, filiere = :filiere, niveau = :niveau WHERE id = :id");
                $requete->execute([
                    ':nom' => $eleve->getNom(),
                    ':prenom' => $eleve->getPrenom(),
                    ':date_naissance' => $eleve->getDate_naissance(),
                    ':numero' => $eleve->getNumero(),
                    ':matricule' => $eleve->getMatricule(),
                    ':sexe' => $eleve->getSexe(),
                    ':secteur' => $eleve->getSecteur(),
                    ':filiere' => $eleve->getFiliere(),
                    ':niveau' => $eleve->getNiveau(),
                    ':id' => $eleve->getId()
                ]);
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteMatiere($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO el(num_matricule,Malagasy,Français,Anglais,MATH,SPHYS,ELEC,TECHNO,Equipement,SCH_AUTO,DESS,INST,ESMES,EPS,EE) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getSphys()."',
                '".$note->getElec()."','".$note->getTechno()."','".$note->getEquipement()."','".$note->getSchauto()."','".$note->getDess()."','".$note->getInst()."',
                '".$note->getEsmes()."','".$note->getEps()."','".$note->getEe()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        public function InsertionNote($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO note(id_eleve,id_filiere,id_classe,moyenne,rang,appreciation,absence,retard) 
                VALUES('".$note->getEleve()."','".$note->getFiliere()."','".$note->getClasse()."','".$note->getMoyenne()."','".$note->getRang()."','".$note->getAppreciation()."','".$note->getAbsence()."',
                '".$note->getRetard()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        
        public function RecupererNoteMatiere($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM el where num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new MatiereModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["ELEC"], 
                        $row["TECHNO"], 
                        $row["Equipement"], 
                        $row["SCH_AUTO"], 
                        $row["DESS"], 
                        $row["INST"], 
                        $row["ESMES"], 
                        $row["EPS"], 
                        $row["EE"]
                    );
                }
        
                return $elModele; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        
    }
?>