<?php

class Produit {

    public $prod_id;
    public $prod_nom;
    public $prod_image;
    public $cat_id;
    public $fam_id;
    public $marq_id;
    public $prod_spec;
    public $prod_desc;
    public $prod_ordre;
    public $prod_etat;

    /**
     * constucteur 
     * parametre prod_image est un string:url 
     */
    public function __construct($prod_id, $prod_nom, $prod_image, $cat_id, $fam_id, $marq_id, $art_id, $prod_ordre, $prod_etat) {
        $this->prod_id = $prod_id;
        $this->prod_nom = $prod_nom;
        $this->prod_image = $prod_image;
        $this->cat_id = $cat_id;
        $this->fam_id = $fam_id;
        $this->marq_id = $marq_id;
        $this->prod_spec = $prod_spec;
        $this->prod_desc = $prod_desc;
        $this->prod_ordre = $prod_ordre;
        $this->prod_etat = $prod_etat;
        return true;
    }

    /** Setter Method */
    public function __set($attr, $value) {
        if (isset($this->$attr))
            $this->$attr = $value;
        else
            throw new Exception(' attribu inconnue ' . $attr);
    }

    /** Getter Method */
    public function __get($attr) {
        if (isset($this->$attr))
            return $this->$attr;
        else
            throw new Exception('Unknow attribute ' . $attr);
    }

}

?>