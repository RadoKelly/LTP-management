<?php
    class NoteModel {
        private $id;
        private $eleve;
        private $filiere;
        private $classe;
        private $total_note;
        private $moyenne;
        private $rang;
        private $appreciation;
        private $absence;
        private $retard;
        private $trimestre;
        private $moyenne_classe;

        public function __construct($id,$eleve,$filiere,$classe,$total_note,$moyenne,$rang,$appreciation,$absence,$retard, $trimestre, $moyenne_classe)
        {
            $this->id = $id;
            $this->eleve = $eleve;
            $this->filiere = $filiere;
            $this->classe = $classe;
            $this->total_note = $total_note;
            $this->moyenne = $moyenne;
            $this->rang = $rang;
            $this->appreciation = $appreciation;
            $this->absence = $absence;
            $this->retard = $retard;
            $this->trimestre = $trimestre;
            $this->moyenne_classe = $moyenne_classe;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of eleve
         */ 
        public function getEleve()
        {
                return $this->eleve;
        }

        /**
         * Set the value of eleve
         *
         * @return  self
         */ 
        public function setEleve($eleve)
        {
                $this->eleve = $eleve;

                return $this;
        }

        /**
         * Get the value of filiere
         */ 
        public function getFiliere()
        {
                return $this->filiere;
        }

        /**
         * Set the value of filiere
         *
         * @return  self
         */ 
        public function setFiliere($filiere)
        {
                $this->filiere = $filiere;

                return $this;
        }

        /**
         * Get the value of classe
         */ 
        public function getClasse()
        {
                return $this->classe;
        }

        /**
         * Set the value of classe
         *
         * @return  self
         */ 
        public function setClasse($classe)
        {
                $this->classe = $classe;

                return $this;
        }

        /**
         * Get the value of moyenne
         */ 
        public function getMoyenne()
        {
                return $this->moyenne;
        }

        /**
         * Set the value of moyenne
         *
         * @return  self
         */ 
        public function setMoyenne($moyenne)
        {
                $this->moyenne = $moyenne;

                return $this;
        }

        /**
         * Get the value of rang
         */ 
        public function getRang()
        {
                return $this->rang;
        }

        /**
         * Set the value of rang
         *
         * @return  self
         */ 
        public function setRang($rang)
        {
                $this->rang = $rang;

                return $this;
        }

        /**
         * Get the value of appreciation
         */ 
        public function getAppreciation()
        {
                return $this->appreciation;
        }

        /**
         * Set the value of appreciation
         *
         * @return  self
         */ 
        public function setAppreciation($appreciation)
        {
                $this->appreciation = $appreciation;

                return $this;
        }

        /**
         * Get the value of absence
         */ 
        public function getAbsence()
        {
                return $this->absence;
        }

        /**
         * Set the value of absence
         *
         * @return  self
         */ 
        public function setAbsence($absence)
        {
                $this->absence = $absence;

                return $this;
        }

        /**
         * Get the value of retard
         */ 
        public function getRetard()
        {
                return $this->retard;
        }

        /**
         * Set the value of retard
         *
         * @return  self
         */ 
        public function setRetard($retard)
        {
                $this->retard = $retard;

                return $this;
        }

        /**
         * Get the value of total_note
         */ 
        public function getTotal_note()
        {
                return $this->total_note;
        }

        /**
         * Set the value of total_note
         *
         * @return  self
         */ 
        public function setTotal_note($total_note)
        {
                $this->total_note = $total_note;

                return $this;
        }

        /**
         * Get the value of trimestre
         */ 
        public function getTrimestre()
        {
                return $this->trimestre;
        }

        /**
         * Set the value of trimestre
         *
         * @return  self
         */ 
        public function setTrimestre($trimestre)
        {
                $this->trimestre = $trimestre;

                return $this;
        }

        /**
         * Get the value of moyenne_classe
         */ 
        public function getMoyenne_classe()
        {
                return $this->moyenne_classe;
        }

        /**
         * Set the value of moyenne_classe
         *
         * @return  self
         */ 
        public function setMoyenne_classe($moyenne_classe)
        {
                $this->moyenne_classe = $moyenne_classe;

                return $this;
        }
    }
