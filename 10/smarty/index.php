<?php
include('db.inc.php');
require('libs/Smarty.class.php');

$smarty = new Smarty;

$result = mysql_query("SELECT * FROM recipes");
$recipes = array();
while($row = mysql_fetch_array($result)) {
array_push($recipes,$row);
}

$smarty->assign('recipes',$recipes);
$smarty->display('index.tpl');

?>