<?php

class DemModel {
    private $id;
    private $num_matricule;
    private $malagasy;
    private $francais;
    private $anglais;
    private $math;
    private $rdm;
    private $sphys;
    private $techno;
    private $hydrau;
    private $topo;
    private $dess;
    private $tp;
    private $morex;
    private $eps;
    private $ee;
    private $trimerste;


    public function __construct($id, $num_matricule, $malagasy, $francais, $anglais, $math, $rdm, $sphys, $techno, $hydrau, $topo, $dess, $tp, $morex, $eps, $ee, $trimerste)
    {
        $this->id = $id;
        $this->num_matricule = $num_matricule;
        $this->malagasy = $malagasy;
        $this->francais = $francais;
        $this->anglais = $anglais;
        $this->math = $math;
        $this->rdm = $rdm;
        $this->sphys = $sphys;
        $this->techno = $techno;
        $this->hydrau = $hydrau;
        $this->topo = $topo;
        $this->dess = $dess;
        $this->tp = $tp;
        $this->morex = $morex;
        $this->eps = $eps;
        $this->ee = $ee;
        $this->trimerste = $trimerste;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getNum_matricule() {
        return $this->num_matricule;
    }

    public function setNum_matricule($num_matricule) {
        $this->num_matricule = $num_matricule;
        return $this;
    }

    public function getMalagasy() {
        return $this->malagasy;
    }

    public function setMalagasy($malagasy) {
        $this->malagasy = $malagasy;
        return $this;
    }

    public function getFrancais() {
        return $this->francais;
    }

    public function setFrancais($francais) {
        $this->francais = $francais;
        return $this;
    }

    public function getAnglais() {
        return $this->anglais;
    }

    public function setAnglais($anglais) {
        $this->anglais = $anglais;
        return $this;
    }

    public function getMath() {
        return $this->math;
    }

    public function setMath($math) {
        $this->math = $math;
        return $this;
    }

    public function getRdm() {
        return $this->rdm;
    }

    public function setRdm($rdm) {
        $this->rdm = $rdm;
        return $this;
    }

    public function getSphys() {
        return $this->sphys;
    }

    public function setSphys($sphys) {
        $this->sphys = $sphys;
        return $this;
    }

    public function getTechno() {
        return $this->techno;
    }

    public function setTechno($techno) {
        $this->techno = $techno;
        return $this;
    }

    public function getHydrau() {
        return $this->hydrau;
    }

    public function setHydrau($hydrau) {
        $this->hydrau = $hydrau;
        return $this;
    }

    public function getTopo() {
        return $this->topo;
    }

    public function setTopo($topo) {
        $this->topo = $topo;
        return $this;
    }

    public function getDess() {
        return $this->dess;
    }

    public function setDess($dess) {
        $this->dess = $dess;
        return $this;
    }

    public function getTp() {
        return $this->tp;
    }

    public function setTp($tp) {
        $this->tp = $tp;
        return $this;
    }

    public function getMorex() {
        return $this->morex;
    }

    public function setMorex($morex) {
        $this->morex = $morex;
        return $this;
    }

    public function getEps() {
        return $this->eps;
    }

    public function setEps($eps) {
        $this->eps = $eps;
        return $this;
    }

    public function getEe() {
        return $this->ee;
    }

    public function setEe($ee) {
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
