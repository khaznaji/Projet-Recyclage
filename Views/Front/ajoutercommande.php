<?PHP
$sql = "SELECT * FROM `commande`;";
include "../../entities/commande.php";
include "../../core/commandeC.php";

if (isset($_POST['id']) or isset($_POST['ville']) or isset($_POST['adresse'])or isset($_POST['nomProduit'])or isset($_POST['modeP']) )
{
    $id=$_POST['id'];
    $ville=$_POST['ville'];
    $adresse=$_POST['adresse'];
    $nomProduit=$_POST['nomProduit'];
    $modeP=$_POST['modeP'];

    $commandevar = new commande($id,$ville,$adresse,$nomProduit,$modeP);
    $commandeCvar= new commandeC() ;
    $commandeCvar->ajoutercommande($commandevar);
    header('commandevalide.php');

    echo <<<HTML
    <a href="commandevalide.php">imprimer une facture
HTML;
}
    else{
        echo "verifier les champs";
    }

?>