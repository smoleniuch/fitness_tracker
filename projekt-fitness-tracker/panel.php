<?php
require_once("core/init.php");

$user = new User();

if(!$user->isLoggedIn()){

  Redirect::to("login.php");

}

$panel = new Template("Templates/panel.tpl");
$panel = $panel->output();

$layout = new Template("Templates/layout.tpl");
$layout->set(array("panel" => $panel));


echo $layout->output();
 ?>
