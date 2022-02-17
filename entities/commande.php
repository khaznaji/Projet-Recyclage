<?PHP

$sql= "SELECT * FROM `commande`";

class commande
{
  private $id ;
  private $ville;
  private $adresse;
  private $nomProduit;
  private $modeP;

  
  function __construct($id,$ville,$adresse,$nomProduit,$modeP)
  {
  $this->id=$id;
  $this->ville=$ville;
  $this->adresse=$adresse;
  $this->nomProduit=$nomProduit;
  $this->modeP=$modeP;
  }
  function getId()
  {
    return $this->id;
  }
  function getville()
  {
    return $this->ville;
  }
  function getadresse()
  {
    return $this->adresse;
  }
  function getnomProduit()
  {
    return $this->nomProduit;
  }
  function getmodeP()
  {
    return $this->modeP;
  }
 

  function setId($id)
  {
    $this->id=$id;
  }
  function setville($ville)
  {
    $this->ville=$ville;
  }
  function setadresse($adresse)
  {
    $this->adresse=$adresse;
  }

    function setnomProduit($nomProduit)
    {
      $this->nomProduit=$nomProduit;
  }
  function setmodeP($modeP)
  {
    $this->modeP=$modeP;

  }
  

 
}
?>
