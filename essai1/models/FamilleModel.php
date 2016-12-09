<?php

include_once 'models/famille.php';
include_once "config/includes.php";

class FamilleModel {

    public function __construct() {
        
    }

    public function addFamille($fam_nom, $fam_ordre, $cat_id) {
        global $pdo;

        $query = $pdo->prepare("INSERT INTO famille (fam_nom,fam_ordre,cat_id) VALUES (?,?,?)");

        $query->bindValue(1, $fam_nom);
        $query->bindValue(2, $fam_ordre);
        $query->bindValue(3, $cat_id);
        $query->execute();

        //  dernier insertion
        $fam_id = $pdo->lastInsertId();
    }

    public function deleteFamille($fam_id) {
        global $pdo;

        $query = $pdo->prepare("DELETE FROM famille WHERE fam_id = ?");
        $query->bindValue(1, $fam_id);
        $query->execute();
    }

}

?>