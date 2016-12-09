<?php

class marque {

    public $marq_id;
    public $marq_nom;
    public $marq_image;

    /**
     * constucteur 
     * parametre prod_image est un string:url 
     */
    public function __construct($marq_id, $marq_nom, $marq_image) {
        $this->marq_id = $marq_id;
        $this->marq_nom = $marq_nom;
        $this->marq_image = $marq_image;

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