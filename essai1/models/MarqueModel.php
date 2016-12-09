<?php

include_once 'models/marque.php';
include_once "config/includes.php";

class MarqueModel {

    public function __construct() {
        
    }

    public function addMarque($marq_nom, $marq_image) {
        global $pdo;

        $query = $pdo->prepare("INSERT INTO marque (marq_nom,marq_image) VALUES (?,?)");

        $query->bindValue(1, $marq_nom);
        $query->bindValue(2, $marq_image);

        $query->execute();

        //  dernier insertion
        $marq_id = $pdo->lastInsertId();
    }

    public function deleteMarque($marq_id) {
        global $pdo;

        $query = $pdo->prepare("DELETE FROM marque WHERE marq_id = ?");
        $query->bindValue(1, $marq_id);
        $query->execute();
    }

}

?>