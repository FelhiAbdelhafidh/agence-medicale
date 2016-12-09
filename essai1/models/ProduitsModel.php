<?php

include_once "config/includes.php";
include_once "models/produit.php";

class ProduitsModel {

    /**
     * Constructeur 
     * @accée public
     */
    public function __construct() {
        
    }

    /**
     *  Retourner un produit
     * @param int $article_id gets article based on id
     * @ retourner requete contient tous les infos d'un produit
     */
    public function getProduit($prod_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM produit WHERE prod_id = ?");
        $query->bindValue(1, $prod_id);
        $query->execute();

        return $query->fetch();
    }

    /**
     * Retourner tous les produits
     * @retourner un tableau de produits
     */
    public function getAllProduits() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM produit");
        $query->execute();
        $rows = $query->fetchAll();

        foreach ($rows as $row) {
            $produit = new produit($row['prod_id'], $row['prod_nom'], $row['prod_image'], $row['cat_id'], $row['fam_id'], $row['marq_id'], $row['prod_spec'], $row['prod_desc'], $row['prod_ordre'], $row['prod_etat']);
            $produits[] = $produit;
        }

        return $produits;
    }

    /**
     *  ajout produit
     * @access public
     */
    public function addProduit($prod_nom, $prod_image, $cat_id, $fam_id, $marq_id, $prod_spec, $prod_desc, $prod_ordre, $prod_etat) {
        global $pdo;

        $query = $pdo->prepare("INSERT INTO produit (prod_nom, prod_image, cat_id, fam_id, marq_id, prod_spec, prod_desc,prod_ordre,prod_etat) VALUES (?,?,?,?,?,?,?,?,?)");

        $query->bindValue(1, $prod_nom);
        $query->bindValue(2, $prod_image);
        $query->bindValue(3, $cat_id);
        $query->bindValue(4, $fam_id);
        $query->bindValue(5, $marq_id);
        $query->bindValue(6, $prod_spec);
        $query->bindValue(7, $prod_desc);
        $query->bindValue(8, $prod_ordre);
        $query->bindValue(9, $prod_etat);
        $query->execute();

        //  dernier insertion
        $produit_id = $pdo->lastInsertId();
    }

    /**
     *  modifier un produit
     * @access public
     */
    public function editProduit($prod_id, $prod_nom, $prod_image, $cat_id, $fam_id, $marq_id, $prod_spec, $prod_desc, $prod_ordre, $prod_etat) {
        global $pdo;

        $sql = "UPDATE produit SET prod_nom=?, prod_image=?, cat_id=?, fam_id=?, marq_id=?, prod_spec=?, prod_desc=?, prod_ordre=?, prod_etat=? WHERE prod_id=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($prod_nom, $prod_image, $cat_id, $fam_id, $marq_id, $prod_spec, $prod_desc, $prod_id, $prod_ordre, $prod_etat));
    }

    /**
     *  suprimer produit 

     * @access public
     */
    public function deleteProduit($produit_id) {
        global $pdo;
        // perform delete query
        $query = $pdo->prepare("DELETE FROM produit WHERE prod_id = ?");
        $query->bindValue(1, $produit_id);
        $query->execute();
    }

    public function getFoundProduit($search_key) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM produit WHERE prod_desc LIKE '%" . $search_key . "%'");
        $query->execute();
        $rows = $query->fetchAll();

        foreach ($rows as $row) {
            $article = new Article($row['prod_id'], $row['prod_nom'], $row['prod_image'], $row['cat_id'], $row['fam_id'], $row['marq_id'], $row['prod_spec'], $row['prod_desc'], $row['prod_ordre'], $row['prod_etat']);
            $articles[] = $article;
        }
        return $articles;
    }

    public function changeEtatProduit($prod_id, $prod_etat) {
        global $pdo;

        $sql = "UPDATE articles SET prod_etat=? WHERE article_id=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($prod_etat, $prod_id));
    }

}

?>