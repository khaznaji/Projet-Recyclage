<?php 
session_start();

	include("config.php");
	include("functions.php");

/*
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}*/
?>
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
    <br>
    <br>
    <br>
<section id="login" class="signup">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label>
            <form action="Views/Front/ajouter.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
           <div class="login-form">
           <div class="group">
                                                <label for="name">Nom<br><br></label>
                                                <input class="label" type="text"  name="Nom" id="Nom" placeholder="Nom">
                                            </div>
                                               <div class="group">
                                                <label >Email<br><br></label>
                                                <input class="label" type="email" class="form-control" name="Email" id="Email" placeholder="Email">
                                            </div>
                                            <div class="group">
                                                <label >Mdp<br><br></label>
                                                <input class="label" type="password" class="form-control" name="Mdp" id="Mdp" placeholder="Mdp">
                                            </div>
                                            <br>
                                            <div class="group">
                                            <input class="label" type="password" id="user-repeatpass" class="form-control" placeholder="confirmer password" required autofocus="">
                                         
                                               </div>
                                                    <div>
                                                    <button type="submit" class="form-submit" value="Sign Up">
                                                       
                                                        <span >Ajouter </span>
                                                        
                                                    </button>
                                                </div>
                                        </form>
                                        <div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1"><a href="login.php">Already Member?</a>
				</div>
                                                        
                                                        </button>
               
                                                        </div>
                                                        </div>
                                     </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

    <script src="Views/Front/vendor/jquery/jquery.min.js"></script>
    <script src="Views/Front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="Views/Front/assets/js/isotope.min.js"></script>
    <script src="Views/Front/assets/js/owl-carousel.js"></script>
    <script src="Views/Front/assets/js/lightbox.js"></script>
    <script src="Views/Front/assets/js/tabs.js"></script>
    <script src="Views/Front/assets/js/video.js"></script>
    <script src="Views/Front/assets/js/slick-slider.js"></script>
    <script src="Views/Front/assets/js/custom.js"></script>
    <!-- JS -->
  
</body>

</html>