<?php 
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

if(isset($_POST['submit_email']) && $_POST['email'])
{
    $email = $_POST['email'] ;
  $link = mysqli_connect('localhost','root','');
  mysqli_select_db(  $link,'projetweb');
  $select=mysqli_query( $link,"select email,password from users where email='$email'");
  if(mysqli_num_rows($select)==1)
  {
    while($row=mysqli_fetch_array( $select))
    { 
      $email=$row['email'];
      $pass=$row['password'];
    }
    $ref="<a href='localhost/pp/Views/Front/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    //require_once('phpmail/PHPMailerAutoload.php');
   // $mail = new PHPMailer();
   /* $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "mailprojetfarah@gmail.com";
    // GMAIL password
    $mail->Password = "Abc123456++";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='mailprojetfarah@gmail.com';
    $mail->FromName='Application';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';*/

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0; 
    $mail->Port = 465 ; //465 or 587

    $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);
       //Authentication
       $mail->Username = "mailprojetfarah@gmail.com";
       $mail->Password = "Abc123456++";
    //Set Params
    $mail->SetFrom("mailprojetfarah@gmail.com");
    $mail->AddAddress($email, 'reciever_name');
    $mail->Subject = "Reset Password";
    $mail->Body = 'liens reset mot de passe : '.$ref.' ';


    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
      header('refresh:1;url=../../login.php');
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>