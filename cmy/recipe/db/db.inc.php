<?php
$con = mysql_connect("mysql.massart.dreamhosters.com",
                     "massartdbuser","massart");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("massarttester", $con);
?>
