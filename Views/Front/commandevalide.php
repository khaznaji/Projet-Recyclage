
<!DOCTYPE html>
<html lang="en">
<head>
    <Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
            <TITLE>Commande</TITLE> 
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Document</title>
    </head>
    

<body>

<link rel="stylesheet" href="style.css">

               <div class="col-lg-12">
                        <div class="card">
                            <div  class="card-body"><p  align="center"><u> FACTURE </u>
                                <div class="table-responsive">
                                    <table >
                                        <thead>










                                        


<?Php

                                        echo ' <img src="bloomminds.jpg" style="width:150px;height:250px /> '; 

include "../../core/commandeC.php";

$sql="SELECT * from commande";
$commandeCvar =new commandeC();
$listecommandes=$commandeCvar->affichercommandes();
$x = 1;
echo "<body style='background-color:black'>";

?>
<div class="table-responsive pt-3">
    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          
                          <th>
                          Id 
                        </th>
                          <th>
                            adresse 
                          </th>
                          <th>
                            ville
                          </th>
                          <th>
                            offre choisi 
                          </th>
                           <th>
                            mode payement 
                          </th>
                          <th>
                           date
                          </th>
                          
                          <th>
                          prix
                          </th>
                        </tr>
                      </thead>
                      <tbody>




                      
<?php
echo "<body style='background-color:black'>";


foreach ($listecommandes as $row) {
    if($x === 999){
echo "<tr ><td>$row[id]</td>" ;

echo "<td>$row[adresse]</td>";
echo "<td>$row[ville]</td>";
echo "<td>$row[date]</td>";
echo "<td>$row[modeP]</td>";
echo "<td>$row[nomProduit]</td></tr>";
}else if($x === 6){
    echo "<tr ><td>$row[id]</td>";
    echo "<td>$row[adresse]</td>";
    echo "<td>$row[ville]</td>";
    echo "<td>$row[nomProduit]</td>";
    echo "<td>$row[modeP]</td>";
    echo "<td>$row[date]</td>";
    echo "<td>899</td></tr>";} 
$x++;
}



?>












                                           
                                           
	
	
	
	
                                              
  </body>
</Html>