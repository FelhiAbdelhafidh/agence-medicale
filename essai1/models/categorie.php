<?php

class categorie {

    public $cat_id;
    public $cat_nom;
    public $cat_ordre;

    /**
     * constucteur 
     * parametre prod_image est un string:url 
     */
    public function __construct($cat_id, $cat_nom, $cat_ordre) {
        $this->cat_id = $cat_id;
        $this->cat_nom = $cat_nom;
        $this->cat_ordre = $cat_ordre;


        return true;
    }

    /** Setter Method */
    public function __set($attr, $value) {
        if (isset($this->$attr))
            $this->$attr = $value;
        else
            throw new Exception(' attribu inconnu ' . $attr);
    }

    /** Getter Method */
    public function __get($attr) {
        if (isset($this->$attr))
            return $this->$attr;
        else
            throw new Exception('attribu inconnu  ' . $attr);
    }

}

?>