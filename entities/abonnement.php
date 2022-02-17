<?PHP
/**
 *
 */
class abonnement
{
  private $id ;
  private $offre;
  private $prix;
  
  function __construct($id,$offre,$prix)
  {
  $this->id=$id;
  $this->offre=$offre;
  $this->prix=$prix;
  }
  function getId()
  {
    return $this->id;
  }
  function getoffre()
  {
    return $this->offre;
  }
  function getprix()
  {
    return $this->prix;
  }
  

  function setId($id)
  {
    $this->id=$id;
  }
  function setoffre($offre)
  {
    $this->offre=$offre;

  }
  function setprix($prix)
  {
    $this->prix=$prix;

  }
  
 
}
?>
