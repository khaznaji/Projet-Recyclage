<?php   

class evennement
{
    public  $id_ev;
    public $nom_ev;
    public $date_ev;
    public  $lieu;
    public $image_ev;

    public function __construct($id_ev,$date_ev,$nom_ev,$lieu,$image_ev)
    {
        $this->id_ev=$id_ev;
        $this->date_ev=$date_ev;
        $this->nom_ev=$nom_ev;
        $this->lieu=$lieu;
        $this->image_ev=$image_ev;

    }


     public function get_id_ev()
{
        return $this->id_ev;
}
    public function get_date_ev()
{
    return $this->date_ev;
}
    public function get_nom_ev(){
        return $this->nom_ev;
    }
    public function get_lieu(){
        return $this->lieu;
    }

public function get_image_ev(){
    return $this->image_ev;
}

}





?>
