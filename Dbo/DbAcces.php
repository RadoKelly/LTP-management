<?php
    require_once '../Models/EleveModel.php';
    require_once '../Models/MatiereModel.php';
    require_once '../Models/NoteModel.php';
    require_once '../Models/g2Model.php';
    require_once '../Models/g3Model.php';
    require_once '../Models/OmModel.php';
    require_once '../Models/DemModel.php';
    require_once '../Models/CecModel.php';
    require_once '../Models/FmModel.php';
    require_once '../Models/ObModel.php';

    class DbAcces{
        private $conn;
        public function __construct($conn){
            $this->conn = $conn;
        }

        public function InsertionEleve($eleve){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO eleves(nom,prenom,date_naissance,numero,matricule,sexe,secteur,filiere,niveau,Contact,Address,Inscription,Observation) 
                VALUES('".$eleve->getNom()."','".$eleve->getPrenom()."','".$eleve->getDate_naissance()."','".$eleve->getNumero()."','".$eleve->getMatricule()."','".$eleve->getSexe()."','".$eleve->getSecteur()."','".$eleve->getFiliere()."','".$eleve->getNiveau()."','".$eleve->getContact()."','".$eleve->getAddress()."','".$eleve->getInscription()."','".$eleve->getObservation()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function executeQuery($sql, $params = []) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt; // Retourne l'objet PDOStatement
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
                        $row["niveau"],
                        $row["Contact"],
                        $row["Address"],
                        $row["Inscription"],
                        $row["Observation"],
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
                        $row["niveau"],
                        $row["Contact"],
                        $row["Address"],
                        $row["Inscription"],
                        $row["Observation"],
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
                $requete = $this->conn->prepare("UPDATE eleves SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, numero = :numero, matricule = :matricule, sexe = :sexe, secteur = :secteur,
                filiere = :filiere, niveau = :niveau, Contact = :contact, Address = :address, Inscription = :inscription, Observation = :observation   WHERE id = :id");
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
                    ':id' => $eleve->getId(),
                    ':contact' => $eleve->getContact(),
                    ':address' => $eleve->getAddress(),
                    ':inscription' => $eleve->getInscription(),
                    ':observation' => $eleve->getObservation(),
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
                $requete = $this->conn->query("INSERT INTO el(num_matricule,Malagasy,Français,Anglais,MATH,SPHYS,ELEC,TECHNO,Equipement,SCH_AUTO,DESS,INST,ESMES,EPS,EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getSphys()."',
                '".$note->getElec()."','".$note->getTechno()."','".$note->getEquipement()."','".$note->getSchauto()."','".$note->getDess()."','".$note->getInst()."',
                '".$note->getEsmes()."','".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteDEM($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO dem(num_matricule, Malagasy, Français, Anglais, MATH, RDM, SPHYS, TECHNO, HYDRAU, TOPO, DESS, TP, MOREX, EPS, EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getRdm()."',
                '".$note->getSphys()."','".$note->getTechno()."','".$note->getHydrau()."','".$note->getTopo()."','".$note->getDess()."','".$note->getTp()."',
                '".$note->getMorex()."','".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteFM($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO fm(num_matricule, Malagasy, Français, Anglais, MATH, SPHYS, TECHNO, MRDM, ANFAB, TP, DESS, EPS, EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getSphys()."',
                '".$note->getTechno()."','".$note->getMrdm()."','".$note->getAnfab()."','".$note->getTp()."','".$note->getDess()."',
                '".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteOB($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO ob(num_matricule, Malagasy, FRANCAIS, Anglais, MATH, SPHYS, OTS, TECHNO, RDM, EFAB, DESS, TP, GEOD, IE, EPS, TRIMESTRE) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getSphys()."',
                '".$note->getOts()."','".$note->getTechno()."','".$note->getRdm()."','".$note->getEfab()."','".$note->getDess()."','".$note->getTp()."',
                '".$note->getGeod()."','".$note->getIe()."','".$note->getEps()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }


        

        public function InsertionNoteCEC($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO cec(num_matricule, Malagasy, Français, Anglais, MATH, RDM, SPHYS, TECHNO, HYDRAU, TOPO, DESS, TP, MOREX, EPS, EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getRdm()."',
                '".$note->getSphys()."','".$note->getTechno()."','".$note->getHydrau()."','".$note->getTopo()."','".$note->getDess()."','".$note->getTp()."',
                '".$note->getMorex()."','".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteOM($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO om(num_matricule, Malagasy, Français, Anglais, MATH, SPHYS, TECHNO, RDM, ANFAB, TRC, TP, DESS, EPS, EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath()."','".$note->getSphys()."',
                '".$note->getTechno()."','".$note->getRdm()."','".$note->getAnfb()."','".$note->getTrc()."','".$note->getTp()."','".$note->getDess()."', 
                '".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteG3($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO g3(num_matricule, Malagasy, Français, Anglais, MATH_G, Philosophie, Maths_fi, Statistiques, Compta_g, INFO, Economie, Droit_fiscal, Droit_com, Droit_soc, Droit_civ,Tec_com, EPS, EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath_g()."','".$note->getPhilosophie()."',
                '".$note->getMaths_fi()."','".$note->getStatistiques()."','".$note->getCompta_g()."','".$note->getInfo()."','".$note->getEconomie()."','".$note->getDroit_fiscal()."',
                '".$note->getDroit_com()."', '".$note->getDroit_soc()."', '".$note->getDroit_civ()."', '".$note->getTec_com()."','".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function InsertionNoteG2($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO g2(num_matricule, Malagasy, Français, Anglais, MATH_G, Philosophie, Maths_fi, Statistiques, Compta, INFO, Economie, Droit_fiscal, Droit_com, Droit_soc, EPS, EE, Trimestre) 
                VALUES('".$note->getNum_matricule()."','".$note->getMalagasy()."','".$note->getFrancais()."','".$note->getAnglais()."','".$note->getMath_g()."','".$note->getPhilosophie()."',
                '".$note->getMaths_fi()."','".$note->getStatistiques()."','".$note->getCompta()."','".$note->getInfo()."','".$note->getEconomie()."','".$note->getDroit_fiscal()."',
                '".$note->getDroit_com()."', '".$note->getDroit_soc()."','".$note->getEps()."','".$note->getEe()."','".$note->getTrimerste()."')");
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
        


        public function InsertionNote($note){
            try {
                // Utilise $this->conn ici
                $requete = $this->conn->query("INSERT INTO note(id_eleve,id_filiere,id_classe,total_note,moyenne,rang,appreciation,absence,retard,trimestre) 
                VALUES('".$note->getEleve()."','".$note->getFiliere()."','".$note->getClasse()."','".$note->getTotal_note()."','".$note->getMoyenne()."','".$note->getRang()."','".$note->getAppreciation()."','".$note->getAbsence()."',
                '".$note->getRetard()."', '".$note->getTrimestre()."')");
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
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        //Inscription='".$inscription."' AND filiere='".$filiere."'

        public function RecupererNoteMatiereTrim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM el WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
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
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteDEM($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM dem WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new DemModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["RDM"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["HYDRAU"], 
                        $row["TOPO"], 
                        $row["DESS"], 
                        $row["TP"], 
                        $row["MOREX"], 
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteDEMTrim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM dem WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new DemModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["RDM"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["HYDRAU"], 
                        $row["TOPO"], 
                        $row["DESS"], 
                        $row["TP"], 
                        $row["MOREX"], 
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }


        public function RecupererNoteFM($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM fm WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new FmModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["MRDM"], 
                        $row["ANFAB"], 
                        $row["TP"], 
                        $row["DESS"],
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteFMTrim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM fm WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new FmModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["MRDM"], 
                        $row["ANFAB"], 
                        $row["TP"], 
                        $row["DESS"],
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteOB($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM ob WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new ObModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["FRANCAIS"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["OTS"], 
                        $row["TECHNO"], 
                        $row["RDM"], 
                        $row["EFAB"], 
                        $row["DESS"], 
                        $row["TP"], 
                        $row["GEOD"], 
                        $row["IE"], 
                        $row["EPS"],
                        $row["TRIMESTRE"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteOBTrim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM ob WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new ObModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["FRANCAIS"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["OTS"], 
                        $row["TECHNO"], 
                        $row["RDM"], 
                        $row["EFAB"], 
                        $row["DESS"], 
                        $row["TP"], 
                        $row["GEOD"], 
                        $row["IE"], 
                        $row["EPS"],
                        $row["TRIMESTRE"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteCEC($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM cec WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new CecModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["RDM"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["HYDRAU"], 
                        $row["TOPO"], 
                        $row["DESS"], 
                        $row["TP"], 
                        $row["MOREX"], 
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"],
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteCECTrim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM cec WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new CecModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["RDM"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["HYDRAU"], 
                        $row["TOPO"], 
                        $row["DESS"], 
                        $row["TP"], 
                        $row["MOREX"], 
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"],
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }



            public function RecupererNoteOM($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM om WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new OmModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["RDM"], 
                        $row["ANFAB"], 
                        $row["TRC"], 
                        $row["TP"], 
                        $row["DESS"],
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteOMTrim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM om WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new OmModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["RDM"], 
                        $row["ANFAB"], 
                        $row["TRC"], 
                        $row["TP"], 
                        $row["DESS"],
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"]
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteG3($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM g3 WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new g3Model(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH_G"], 
                        $row["Philosophie"], 
                        $row["Maths_fi"], 
                        $row["Statistiques"], 
                        $row["Compta_g"], 
                        $row["INFO"], 
                        $row["Economie"], 
                        $row["Droit_fiscal"], 
                        $row["Droit_com"], 
                        $row["Droit_soc"], 
                        $row["Droit_civ"], 
                        $row["Tec_com"], 
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"],  
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteG3Trim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM g3 WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new g3Model(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH_G"], 
                        $row["Philosophie"], 
                        $row["Maths_fi"], 
                        $row["Statistiques"], 
                        $row["Compta_g"], 
                        $row["INFO"], 
                        $row["Economie"], 
                        $row["Droit_fiscal"], 
                        $row["Droit_com"], 
                        $row["Droit_soc"], 
                        $row["Droit_civ"], 
                        $row["Tec_com"], 
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"],  
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteG2($num) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM g2 WHERE num_matricule =".$num);
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new g2Model(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH_G"], 
                        $row["Philosophie"], 
                        $row["Maths_fi"], 
                        $row["Statistiques"], 
                        $row["Compta"], 
                        $row["INFO"], 
                        $row["Economie"], 
                        $row["Droit_fiscal"], 
                        $row["Droit_com"], 
                        $row["Droit_soc"],
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"],
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function RecupererNoteG2Trim($num,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM g2 WHERE num_matricule ='".$num."' AND Trimestre ='".$trim."'");
                
                // Récupération des résultats
                $elModele = null;
                if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elModele = new g2Model(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH_G"], 
                        $row["Philosophie"], 
                        $row["Maths_fi"], 
                        $row["Statistiques"], 
                        $row["Compta"], 
                        $row["INFO"], 
                        $row["Economie"], 
                        $row["Droit_fiscal"], 
                        $row["Droit_com"], 
                        $row["Droit_soc"],
                        $row["EPS"], 
                        $row["EE"],
                        $row["Trimestre"],
                    );
                }
        
                return $elModele; // Renvoie le modèle de l'élève avec les notes
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return null;
            }
        }

        public function AfficherNote($matricule) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM el where num_matricule =".$matricule);
                
                // Récupération des résultats
                $eleves = [];
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $eleves[] = new MatiereModel(
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
                        $row["EE"],
                        $row["Trimestre"],
                    );
                }
        
                return $eleves; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function AfficherNoteDEM($matricule) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM dem where num_matricule =".$matricule);
                
                // Récupération des résultats
                $eleves = null;
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $eleves = new DemModel(
                        $row["id"], 
                        $row["num_matricule"], 
                        $row["Malagasy"], 
                        $row["Français"], 
                        $row["Anglais"], 
                        $row["MATH"], 
                        $row["RDM"], 
                        $row["SPHYS"], 
                        $row["TECHNO"], 
                        $row["HYDRAU"],
                        $row["TOPO"],
                        $row["DESS"],
                        $row["TP"],
                        $row["MOREX"],
                        $row["EPS"],
                        $row["EE"],
                        $row["Trimestre"],
                    );
                }
        
                return $eleves; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function RecupererNoteEleve($id) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM note WHERE id_filiere =".$id);
                
                // Récupération des résultats
                $notes = null;
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $notes = new NoteModel(
                        $row["id_note"], 
                        $row["id_eleve"], 
                        $row["id_filiere"], 
                        $row["id_classe"], 
                        $row["total_note"], 
                        $row["moyenne"], 
                        $row["rang"], 
                        $row["appreciation"], 
                        $row["absence"], 
                        $row["retard"], 
                        $row["trimestre"], 
                        $row["moyenne_classe"], 
                    );
                }
        
                return $notes; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function ListeEleveClasse($inscription,$filiere,$niveau,$trim) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM eleves WHERE Inscription='".$inscription."' AND filiere='".$filiere."' AND niveau='".$niveau."'");
                
                // Récupération des résultats
                $elevesT = [];
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $elevesT[] = new EleveModel(
                        $row["id"], 
                        $row["nom"], 
                        $row["prenom"], 
                        $row["date_naissance"], 
                        $row["numero"], 
                        $row["matricule"], 
                        $row["sexe"], 
                        $row["secteur"], 
                        $row["filiere"], 
                        $row["niveau"],
                        $row["Contact"],
                        $row["Address"],
                        $row["Inscription"],
                        $row["Observation"]
                    );
                }
                $eleves = [];
                foreach($elevesT as $el){
                    $requete = $this->conn->query("SELECT * FROM note WHERE trimestre='".$trim."' AND id_eleve=".$el->getId());
                    if ($requete->rowCount() > 0) {
                        array_push($eleves, $el);
                    }
                }
                return $eleves; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }
            
        public function RecupererNoteEleveFin($id) {
            try {
                // Préparation et exécution de la requête avec PDO
                $requete = $this->conn->query("SELECT * FROM note WHERE id_eleve =".$id);
                
                // Récupération des résultats
                $notes = null;
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    $notes = new NoteModel(
                        $row["id_note"], 
                        $row["id_eleve"], 
                        $row["id_filiere"], 
                        $row["id_classe"],  
                        $row["total_note"], 
                        $row["moyenne"], 
                        $row["rang"], 
                        $row["appreciation"], 
                        $row["absence"], 
                        $row["retard"], 
                        $row["trimestre"], 
                        $row["moyenne_classe"], 
                    );
                }
        
                return $notes; // Renvoie le tableau d'élèves
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }


        public function ModifierEleveNote($id,$rang) {
            try {
                $requete = $this->conn->query("UPDATE note SET rang=".$rang." WHERE id_note=".$id);
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function UpdateNote($id,$absence,$retard) {
            try {
                $requete = $this->conn->query("UPDATE note SET absence=".$absence.", retard=".$retard."  WHERE id_eleve=".$id);
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }

        public function UpdateMoyenClasse($id,$moyenClasse) {
            try {
                $requete = $this->conn->query("UPDATE note SET moyenne_classe=".$moyenClasse."  WHERE id_eleve=".$id);
                return true;
            } catch (PDOException $ex) {
                echo "Erreur : " . $ex->getMessage();
                return false;
            }
        }




        
        

        
    }
?>