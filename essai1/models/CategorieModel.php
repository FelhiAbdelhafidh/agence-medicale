<?php

include_once 'models/categorie.php';
include_once "config/includes.php";

class CategorieModel {

    public function __construct() {
        
    }

    public function getCategorie($cat_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM categorie WHERE cat_id = ?");
        $query->bindValue(1, $cat_id);
        $query->execute();

        return $query->fetch();
    }

    public function getAllCategorie() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM categorie");
        $query->execute();
        $rows = $query->fetchAll();

        foreach ($rows as $row) {
            $produit = new produit($row['cat_id'], $row['cat_nom'], $row['cat_ordre']);
            $produits[] = $produit;
        }

        return $produits;
    }

    public function addCategorie($cat_nom, $cat_ordre) {
        global $pdo;

        $query = $pdo->prepare("INSERT INTO categorie (cat_nom,cat_ordre) VALUES (?,?)");

        $query->bindValue(1, $cat_nom);
        $query->bindValue(2, $cat_ordre);

        $query->execute();

        //  dernier insertion
        $cat_id = $pdo->lastInsertId();
    }

    public function deleteCategorie($cat_id) {
        global $pdo;

        $query = $pdo->prepare("DELETE FROM categorie WHERE cat_id = ?");
        $query->bindValue(1, $cat_id);
        $query->execute();
    }

}

?>