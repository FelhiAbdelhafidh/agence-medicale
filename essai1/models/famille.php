<?php

class famille {

    public $fam_id;
    public $fam_nom;
    public $fam_ordre;
    public $cat_id;

    /**
     * constucteur 
     * parametre prod_image est un string:url 
     */
    public function __construct($fam_id, $fam_nom, $fam_ordre, $cat_id) {
        $this->fam_id = $fam_id;
        $this->fam_nom = $fam_nom;
        $this->fam_ordre = $fam_ordre;
        $this->cat_id = $cat_id;


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