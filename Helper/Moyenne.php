<?php 
    class MoyenneEl{
        public function El($noteEl){
            $total = $noteEl->getMalagasy() + 
            $noteEl->getFrancais() + 
            $noteEl->getAnglais() + 
            $noteEl->getMath() + 
            $noteEl->getSphys() + 
            $noteEl->getElec() + 
            $noteEl->getTechno() + 
            $noteEl->getEquipement() + 
            $noteEl->getSchauto() + 
            $noteEl->getDess() + 
            $noteEl->getInst() + 
            $noteEl->getEsmes() + 
            $noteEl->getEps() + 
            $noteEl->getEe();

            return $total / 41;
        }
    }
?>