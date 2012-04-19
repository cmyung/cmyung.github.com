<!DOCTYPE html>
<?php include('db.inc.php'); ?>
<?php

if(isset($_POST['name'])) {
  $name = addslashes($_POST['name']);
  $ingredients = addslashes($_POST['ingredients']);
  $steps = addslashes($_POST['steps']);

$result = mysql_query("INSERT INTO recipes (name,ingredients,steps) VALUES ('$name','$ingredients','$steps')");
if(!$result) { die(mysql_error()); }
}

if($_REQUEST['q']) {
$q= addslashes($_REQUEST['q']);
$result = mysql_query("SELECT * FROM recipes WHERE name LIKE '%$q%';");
} else {
$result = mysql_query("SELECT * FROM recipes");
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
<form action='?' method='get'>
<input type='text' name='q' value='<?php echo $q; ?>'/><input type='submit' value='search'/>
</form>

<?php
foreach($recipes as $recipe) {
?>
<h2><a href='post.php?id=<?php echo $recipe['id'] ?>'>
     <?php echo htmlspecialchars($recipe['name']); ?>
    </a></h2>
<h3>Ingredients</h3>
<p><?php echo htmlspecialchars($recipe['ingredients']); ?></p>
<h3>Steps</h3>
<p><?php echo htmlspecialchars($recipe['steps']); ?></p>

<img src='<?php echo($recipe['picture']); ?>'/>
  

<?php } ?>
<h1>Add your own recipe</h1>
<form action='?' method='post'>
<ol>
<li>
  <label for='name'>Recipe name</label>
  <input name='name'/>
</li>
<li>
  <label for='ingredients'>Recipe ingredients</label>
  <textarea name='ingredients'></textarea>
</li>
<li>
  <label for='steps'>Recipe steps</label>
  <textarea name='steps'></textarea>
</li>
<li>
  <input type='submit' value='Submit'/>
</li>
</ol>

</form>

</body>
</html>
