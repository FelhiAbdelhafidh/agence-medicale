<?php

include_once 'models/marque.php';
include_once "../config/includes.php";

class q_s_nModel {

    public function __construct() {
        
    }

    public function getQ_S_N($presentation, $historique, $savoirFaire) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM q_s_n ");

        $query->bindValue(1, $presentation);
        $query->bindValue(2, $historique);
        $query->bindValue(3, $savoirFaire);
        $query->execute();
    }

    public function editQ_S_N($presentation, $historique, $savoirFaire) {
        global $pdo;

        $query = $pdo->prepare("UPDATE q_s_n SET presentation=?, historique=?, savoirFaire=?");
        $query->bindValue(1, $marq_id);
        $query->execute(array($presentation, $historique, $savoirFaire));
    }

}

?>