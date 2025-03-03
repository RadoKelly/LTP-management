<?php

require_once '../config/database.php';
require_once '../Dbo/DbAcces.php';



class MatiereModel {
    private $id;
    private $num_matricule;
    private $malagasy;
    private $francais;
    private $anglais;
    private $math;
    private $sphys;
    private $elec;
    private $techno;
    private $equipement;
    private $schauto;
    private $dess;
    private $inst;
    private $esmes;
    private $eps;
    private $ee;
    private $trimerste;


    public function __construct($id,$num_matricule,$malagasy,$francais,$anglais,$math,$sphys,$elec,$techno,
    $equipement,$schauto,$dess,$inst,$esmes,$eps,$ee,$trimerste)
    {
        $this->id = $id;
        $this->num_matricule = $num_matricule;
        $this->malagasy = $malagasy;
        $this->francais = $francais;
        $this->anglais = $anglais;
        $this->math = $math;
        $this->sphys = $sphys;
        $this->elec = $elec;
        $this->techno = $techno;
        $this->equipement = $equipement;
        $this->schauto = $schauto;
        $this->dess = $dess;
        $this->inst = $inst;
        $this->esmes = $esmes;
        $this->eps = $eps;
        $this->ee = $ee;
        $this->trimerste = $trimerste;

    }
    


    /**
     * Get the value of filiere
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of num_matricule
     */ 
    public function getNum_matricule()
    {
        return $this->num_matricule;
    }

    /**
     * Set the value of num_matricule
     *
     * @return  self
     */ 
    public function setNum_matricule($num_matricule)
    {
        $this->num_matricule = $num_matricule;

        return $this;
    }

    /**
     * Get the value of malagasy
     */ 
    public function getMalagasy()
    {
        return $this->malagasy;
    }

    /**
     * Set the value of malagasy
     *
     * @return  self
     */ 
    public function setMalagasy($malagasy)
    {
        $this->malagasy = $malagasy;

        return $this;
    }

    /**
     * Get the value of francais
     */ 
    public function getFrancais()
    {
        return $this->francais;
    }

    /**
     * Set the value of francais
     *
     * @return  self
     */ 
    public function setFrancais($francais)
    {
        $this->francais = $francais;

        return $this;
    }

    /**
     * Get the value of anglais
     */ 
    public function getAnglais()
    {
        return $this->anglais;
    }

    /**
     * Set the value of anglais
     *
     * @return  self
     */ 
    public function setAnglais($anglais)
    {
        $this->anglais = $anglais;

        return $this;
    }

    /**
     * Get the value of math
     */ 
    public function getMath()
    {
        return $this->math;
    }

    /**
     * Set the value of math
     *
     * @return  self
     */ 
    public function setMath($math)
    {
        $this->math = $math;

        return $this;
    }

    /**
     * Get the value of sphys
     */ 
    public function getSphys()
    {
        return $this->sphys;
    }

    /**
     * Set the value of sphys
     *
     * @return  self
     */ 
    public function setSphys($sphys)
    {
        $this->sphys = $sphys;

        return $this;
    }

    /**
     * Get the value of elec
     */ 
    public function getElec()
    {
        return $this->elec;
    }

    /**
     * Set the value of elec
     *
     * @return  self
     */ 
    public function setElec($elec)
    {
        $this->elec = $elec;

        return $this;
    }

    /**
     * Get the value of techno
     */ 
    public function getTechno()
    {
        return $this->techno;
    }

    /**
     * Set the value of techno
     *
     * @return  self
     */ 
    public function setTechno($techno)
    {
        $this->techno = $techno;

        return $this;
    }

    /**
     * Get the value of equipement
     */ 
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set the value of equipement
     *
     * @return  self
     */ 
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get the value of schauto
     */ 
    public function getSchauto()
    {
        return $this->schauto;
    }

    /**
     * Set the value of schauto
     *
     * @return  self
     */ 
    public function setSchauto($schauto)
    {
        $this->schauto = $schauto;

        return $this;
    }

    /**
     * Get the value of dess
     */ 
    public function getDess()
    {
        return $this->dess;
    }

    /**
     * Set the value of dess
     *
     * @return  self
     */ 
    public function setDess($dess)
    {
        $this->dess = $dess;

        return $this;
    }

    /**
     * Get the value of inst
     */ 
    public function getInst()
    {
        return $this->inst;
    }

    /**
     * Set the value of inst
     *
     * @return  self
     */ 
    public function setInst($inst)
    {
        $this->inst = $inst;

        return $this;
    }

    /**
     * Get the value of esmes
     */ 
    public function getEsmes()
    {
        return $this->esmes;
    }

    /**
     * Set the value of esmes
     *
     * @return  self
     */ 
    public function setEsmes($esmes)
    {
        $this->esmes = $esmes;

        return $this;
    }

    /**
     * Get the value of eps
     */ 
    public function getEps()
    {
        return $this->eps;
    }

    /**
     * Set the value of eps
     *
     * @return  self
     */ 
    public function setEps($eps)
    {
        $this->eps = $eps;

        return $this;
    }

    /**
     * Get the value of ee
     */ 
    public function getEe()
    {
        return $this->ee;
    }

    /**
     * Set the value of ee
     *
     * @return  self
     */ 
    public function setEe($ee)
    {
        $this->ee = $ee;

        return $this;
    }

        /**
     * Get the value of trimerste
     */ 
    public function getTrimerste()
    {
        return $this->trimerste;
    }

    /**
     * Set the value of trimerste
     *
     * @return  self
     */ 
    public function setTrimerste($trimerste)
    {
        $this->trimerste = $trimerste;

        return $this;
    }

}