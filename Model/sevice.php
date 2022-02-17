<?php
class user{
	

private $name;
private $mdp;
private $email;
public  function __construct($name,$mdp,$email)
{
    $this->name=$name;
    $this->mdp=$mdp;
    $this->email=$email;
}

public function getname()
{
	return $this->name;
}
public function getmdp()
{
	return $this->mdp;
}
public function getemail()
{
	return $this->email;
}



}
class userr{
   


private $name;
private $mdp;
private $email;
private $id;
private $profile_image;

public  function __construct($id, $name,$mdp,$email,$profile_image)
{
  
    $this->id=$id;
    $this->name=$name;
    $this->mdp=$mdp;
    $this->email=$email;
     $this->profile_image=$profile_image;




}



public function getid()
{
   return $this->id;
}
public function getname()
{
   return $this->name;
}
public function getmdp()
{
   return $this->mdp;
}
public function getemail()
{
   return $this->email;
}
public function getprofileImage()
{
   return $this->profile_image;
}



}


?>