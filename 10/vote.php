<html>
<head>
<title>PHP Vote Script</title>
<style type="text/css">
ul {
list-style-type: none;
list-style-position: inside;
padding: 0px;
margin: 0px;
}
 
ul li {
padding-bottom: 10px;
}
</style>
</head>
<body>
<div>
<?php
if(!isset($include_file)){$include_file = "vote_form.inc.php";}
 
include($include_file);
 
mysql_close(); //close MySQL connection at the end
?>
</div>
</body>
</html>