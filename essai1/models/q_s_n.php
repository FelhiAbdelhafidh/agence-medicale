<?php

class q_s_n {

    public $presentation;
    public $historique;
    public $savoirFaire;

    /**
     * constucteur 
     * parametre prod_image est un string:url 
     */
    public function __construct($presentation, $historique, $savoirFaire) {
        $this->presentation = $presentation;
        $this->historique = $historique;
        $this->savoirFaire = $savoirFaire;

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