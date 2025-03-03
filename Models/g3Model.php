<?php

class g3Model {
    private $id;
    private $num_matricule;
    private $malagasy;
    private $francais;
    private $anglais;
    private $math_g;
    private $philosophie;
    private $maths_fi;
    private $statistiques;
    private $compta_g;
    private $info;
    private $economie;
    private $droit_fiscal;
    private $droit_com;
    private $droit_soc;
    private $droit_civ;
    private $tec_com;
    private $eps;
    private $ee;
    private $trimerste;

    public function __construct($id, $num_matricule, $malagasy, $francais, $anglais, $math_g, $philosophie, $maths_fi, $statistiques,
     $compta_g, $info, $economie, $droit_fiscal, $droit_com, $droit_soc, $droit_civ, $tec_com, $eps, $ee, $trimerste){
        $this->id = $id;
        $this->num_matricule = $num_matricule;
        $this->malagasy = $malagasy;
        $this->francais = $francais;
        $this->anglais = $anglais;
        $this->math_g = $math_g;
        $this->philosophie = $philosophie;
        $this->maths_fi = $maths_fi;
        $this->statistiques = $statistiques;
        $this->compta_g = $compta_g;
        $this->info = $info;
        $this->economie = $economie;
        $this->droit_fiscal = $droit_fiscal;
        $this->droit_com = $droit_com;
        $this->droit_soc = $droit_soc;
        $this->droit_civ = $droit_civ;
        $this->tec_com = $tec_com;
        $this->eps = $eps;
        $this->ee = $ee;
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
     * Get the value of math_g
     */ 
    public function getMath_g()
    {
        return $this->math_g;
    }

    /**
     * Set the value of math_g
     *
     * @return  self
     */ 
    public function setMath_g($math_g)
    {
        $this->math_g = $math_g;

        return $this;
    }

    /**
     * Get the value of philosophie
     */ 
    public function getPhilosophie()
    {
        return $this->philosophie;
    }

    /**
     * Set the value of philosophie
     *
     * @return  self
     */ 
    public function setPhilosophie($philosophie)
    {
        $this->philosophie = $philosophie;

        return $this;
    }

    /**
     * Get the value of maths_fi
     */ 
    public function getMaths_fi()
    {
        return $this->maths_fi;
    }

    /**
     * Set the value of maths_fi
     *
     * @return  self
     */ 
    public function setMaths_fi($maths_fi)
    {
        $this->maths_fi = $maths_fi;

        return $this;
    }

    /**
     * Get the value of statistiques
     */ 
    public function getStatistiques()
    {
        return $this->statistiques;
    }

    /**
     * Set the value of statistiques
     *
     * @return  self
     */ 
    public function setStatistiques($statistiques)
    {
        $this->statistiques = $statistiques;

        return $this;
    }

    /**
     * Get the value of compta_g
     */ 
    public function getCompta_g()
    {
        return $this->compta_g;
    }

    /**
     * Set the value of compta_g
     *
     * @return  self
     */ 
    public function setCompta_g($compta_g)
    {
        $this->compta_g = $compta_g;

        return $this;
    }

    /**
     * Get the value of info
     */ 
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set the value of info
     *
     * @return  self
     */ 
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of economie
     */ 
    public function getEconomie()
    {
        return $this->economie;
    }

    /**
     * Set the value of economie
     *
     * @return  self
     */ 
    public function setEconomie($economie)
    {
        $this->economie = $economie;

        return $this;
    }

    /**
     * Get the value of droit_fiscal
     */ 
    public function getDroit_fiscal()
    {
        return $this->droit_fiscal;
    }

    /**
     * Set the value of droit_fiscal
     *
     * @return  self
     */ 
    public function setDroit_fiscal($droit_fiscal)
    {
        $this->droit_fiscal = $droit_fiscal;

        return $this;
    }

    /**
     * Get the value of droit_com
     */ 
    public function getDroit_com()
    {
        return $this->droit_com;
    }

    /**
     * Set the value of droit_com
     *
     * @return  self
     */ 
    public function setDroit_com($droit_com)
    {
        $this->droit_com = $droit_com;

        return $this;
    }

    /**
     * Get the value of droit_soc
     */ 
    public function getDroit_soc()
    {
        return $this->droit_soc;
    }

    /**
     * Set the value of droit_soc
     *
     * @return  self
     */ 
    public function setDroit_soc($droit_soc)
    {
        $this->droit_soc = $droit_soc;

        return $this;
    }

    /**
     * Get the value of droit_civ
     */ 
    public function getDroit_civ()
    {
        return $this->droit_civ;
    }

    /**
     * Set the value of droit_civ
     *
     * @return  self
     */ 
    public function setDroit_civ($droit_civ)
    {
        $this->droit_civ = $droit_civ;

        return $this;
    }

    /**
     * Get the value of tec_com
     */ 
    public function getTec_com()
    {
        return $this->tec_com;
    }

    /**
     * Set the value of tec_com
     *
     * @return  self
     */ 
    public function setTec_com($tec_com)
    {
        $this->tec_com = $tec_com;

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