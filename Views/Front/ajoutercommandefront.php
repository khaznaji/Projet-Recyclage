<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
   <style>
       body{
	margin:0;
	color:white;
	background:#03224C;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
       </style>
    
  </head>

<body>

    
    <section id="login" class="signup">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ajouter Commande</label>
                
                   
    <form method="POST" action="ajoutercommande.php">
    <div class="login-form">
           <div class="group">
        <table border="4"> 
            <tr>
        <link rel="stylesheet" href="style.css">
</div>
               <div class="col-lg-12">
                        <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
										 
                                  
												
                                       
      <p>Commande</p>
      <hr>
        <tr> 
           
        <td><b>Numéro telephone</td>
        <td><input class="label" type="number" name="id" required > </td>
        </tr>
        <tr>
        <td><b>Ville</td>
        <td> <select   name="ville" font-size:15px;position:relative;left:25px;top:30px;">
            <option value="choisir ville">choisir votre ville</option>
    <option value="tunis">Tunis</option>
    <option value="Bizerte">Ben Arous</option>
    <option value="Nabeul">Nabeul</option>
    <option value="Sousse">Sousse</option>
    <option value="Mounastir">Mounastir</option>
    <option value="Kélibia">Kélibia</option>
    <option value="Basique 6 mois">Gabes</option>
    <option value="Touzeur">Touzeur</option>
    <option value="Ariana">Ariana</option>
    <option value="Beja">Beja</option>
    <option value="Jandouba">Jandouba</option>
    <option value="Ben Arous">Ben Arous</option>
    <option value="Gafsa">Gafsa</option>
    <option value="Jandouba">Jandouba</option>
    <option value="Kairouan">Kairouan</option>
    <option value="Kasserine">Kasserine</option>
    <option value="Kébili">Kébili</option>
    <option value="le Kef">le Kef</option>
    <option value="Mahdia">Mahdia</option>
    <option value="Manouba">Manouba</option>
    <option value="Sfax">Sfax</option>
    <option value="Sidi">Sidi Bouzid</option>
    <option value="Siliana">Siliana</option>
    <option value="Tataouine">Tataouine</option>
    <option value="Zaghouan">Zaghouan</option>
            </select> </td>
        </tr>
        <tr>
     <td><b>adresse exacte</td>
        <td><input class="label" type="text" name="adresse" required> </td>
        </tr>
       
       
      

        <?PHP 
    $sql = "SELECT * FROM `abonnement`;";

    include "../../core/abonnementC.php";
    
    $abonnementCvar =new abonnementC();
    $listeabonnements=$abonnementCvar->afficherabonnements();
    ?>

       
        
        <td><b>Abonnement </td>
            <td>
            <select   name="nomProduit" style="height: 50px" required>
                <option value="choisir Abonnement">choisir votre abonnement</option>
                <?PHP
                foreach($listeabonnements as $row){
        ?>
        
       
        <option value="<?= $row['offre']?>"> <?= $row['offre'] ?></option>
        
        <?PHP
    }
    ?>

        
                </select> </td>
                
            
            
            
         <tr>
        <td><b>Mode Payement </td>
        <td> 
            <select   name="modeP"   style="height: 50px" required>
                                     <option value="choisir mode de payement">choisir mode</option>
                             <option value="cash" name="cash">payer comptant</option>
                             <option value="carte" name="carte">payement par carte</option>
               </select> </td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="submit" value="valider commande" style="position: relative;top: 50px;background-color:rgb(89, 193, 207);"></td>
        </tr>
        </table>
        </form>
        
    </center>
</body>
</html>