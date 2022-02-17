<?php   

class catevent
{
    public $id_catevent;
    public $nom_catevent;
    

    public function __construct($id_catevent,$nom_catevent)
    {
        $this->id_catevent=$id_catevent;
        $this->nom_catevent=$nom_catevent;

    }


     public function get_idcatevent()
{
        return $this->id_catevent;
}

    public function get_nom_catevent()
    {
        return $this->nom_catevent;
    }


}
?>




