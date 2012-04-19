<!DOCTYPE html>
<?php
$con = mysql_connect("mysql.massart.dreamhosters.com",
                     "massartdbuser","massart");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("massarttester", $con);

if(isset($_POST['name'])) {
  $name = $_POST['name'];
  $ingredients = $_POST['ingredients'];
  $steps = $_POST['steps'];

$result = mysql_query("INSERT INTO recipes (name,ingredients,steps) VALUES ('$name','$ingredients','$steps')");
}


$result = mysql_query("SELECT * FROM recipes");

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
<h2><?php echo htmlspecialchars($recipe['name']); ?></h2>
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
  <textarea ingredients='ingredients'></textarea>
</li>
<li>
  <label for='steps'>Recipe steps</label>
  <textarea steps='steps'></textarea>
</li>
<li>
  <input type='submit' value='Submit'/>
</li>
</ol>

</form>

</body>
</html>
