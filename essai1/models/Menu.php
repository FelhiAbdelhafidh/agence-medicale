<?php

class Menu {

    public $men_id;
    public $men_titre;
    public $men_cont;
    public $men_parent;
    public $men_type;

    /**
     * constucteur 
     * parametre prod_image est un string:url 
     */
    public function __construct($men_id, $men_titre, $men_cont, $men_parent, $men_type) {
        $this->men_id = $men_id;
        $this->men_titre = $men_titre;
        $this->men_cont = $men_cont;
        $this->men_parent = $men_parent;
        $this->men_type = $men_type;

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