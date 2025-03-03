<?php

class ObModel {
    private $id;
    private $num_matricule;
    private $malagasy;
    private $francais;
    private $anglais;
    private $math;
    private $sphys;
    private $ots;
    private $techno;
    private $rdm;
    private $efab;
    private $dess;
    private $tp;
    private $geod;
    private $ie;
    private $eps;
    private $trimerste;

    public function __construct($id, $num_matricule, $malagasy, $francais, $anglais, $math,
     $sphys, $ots, $techno, $rdm, $efab, $dess, $tp, $geod, $ie, $eps, $trimerste)
    {
        $this->id = $id;
        $this->num_matricule = $num_matricule;
        $this->malagasy = $malagasy;
        $this->francais = $francais;
        $this->anglais = $anglais;
        $this->math = $math;
        $this->sphys = $sphys;
        $this->ots = $ots;
        $this->techno = $techno;
        $this->rdm = $rdm;
        $this->efab = $efab;
        $this->dess = $dess;
        $this->tp = $tp;
        $this->geod = $geod;
        $this->ie = $ie;
        $this->eps = $eps;
        $this->trimerste = $trimerste;
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
     * Get the value of ots
     */ 
    public function getOts()
    {
        return $this->ots;
    }

    /**
     * Set the value of ots
     *
     * @return  self
     */ 
    public function setOts($ots)
    {
        $this->ots = $ots;

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
     * Get the value of rdm
     */ 
    public function getRdm()
    {
        return $this->rdm;
    }

    /**
     * Set the value of rdm
     *
     * @return  self
     */ 
    public function setRdm($rdm)
    {
        $this->rdm = $rdm;

        return $this;
    }

    /**
     * Get the value of efab
     */ 
    public function getEfab()
    {
        return $this->efab;
    }

    /**
     * Set the value of efab
     *
     * @return  self
     */ 
    public function setEfab($efab)
    {
        $this->efab = $efab;

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
     * Get the value of tp
     */ 
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set the value of tp
     *
     * @return  self
     */ 
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get the value of geod
     */ 
    public function getGeod()
    {
        return $this->geod;
    }

    /**
     * Set the value of geod
     *
     * @return  self
     */ 
    public function setGeod($geod)
    {
        $this->geod = $geod;

        return $this;
    }

    /**
     * Get the value of ie
     */ 
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * Set the value of ie
     *
     * @return  self
     */ 
    public function setIe($ie)
    {
        $this->ie = $ie;

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