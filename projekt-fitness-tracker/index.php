<?php
require_once("core/init.php");

var_dump($_SERVER);
$user = new User();

//default panel
if($user->isLoggedIn()){

  Redirect::to("panel.php");

}
else{

  Redirect::to("login.php");

}




?>
