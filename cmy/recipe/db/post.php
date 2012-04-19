<!DOCTYPE html>
<?php include('db.inc.php'); ?>
<?php
if($_REQUEST['id']) {
  $id = $_REQUEST['id'];
$result = mysql_query("SELECT * FROM recipes WHERE id = $id;");
} 
$recipes = array();
while($row = mysql_fetch_array($result)) {
  array_push($recipes,$row);
}
?>
<html>
  <head>
    <title>Recipr</title>
  </head>
  <body>

<h1>Recipr</h1>
<?php
foreach($recipes as $recipe) {
?>
<h1><?php echo htmlspecialchars($recipe['name']); ?></h1>
<h3>Ingredients</h3>
<p><?php echo htmlspecialchars($recipe['ingredients']); ?></p>
<h3>Steps</h3>
<p><?php echo htmlspecialchars($recipe['steps']); ?></p>

<img src='<?php echo($recipe['picture']); ?>'/>
  

<?php } ?>

</body>
</html>
