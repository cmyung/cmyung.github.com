<?php $page='contact'; ?>
<?php include('header.inc.php'); ?>
<section id='contact'>
<h1>Contact Us</h1>

<?php

if (isset($_REQUEST['typename'])) {
	$submitted = true;

if (!$_REQUEST['typename']) {
	$submitted = false;
	$name_error = true;
	}

if (!$_REQUEST['typeemail']) {
	$submitted = false;
	$email_error = true;
	}
}
if($submitted) {
$name = $_REQUEST['typename'];
echo "Thank you for your submission $name!";
$body = "";
$body .= "Name: $_REQUEST[typename]\n";
$body .= "Email: $_REQUEST[typeemail]\n";
$body .= "Flavor: $_REQUEST[typeflavor]\n";
$body .= "Location: $_REQUEST[location]\n";
$body .= "Newsletter: $_REQUEST[mailtype]\n";

mail("cmyungweb@gmail.com","Snow cone contact from: $name", $body);
}
else {
?>

<form action='?' method='post'>
<?php if($name_error) { echo "<em>Please enter your name</em><br />"; } ?>
	<label for="typename">Name:</label>
	<input type="text" name="typename" id="type-text" value="<?php echo htmlentities($_REQUEST['typename']); ?>" /> <br /><br />

<?php if($email_error) { echo "<em>Please enter your email</em><br />"; } ?>
	<label for="typeemail">E-mail:</label>
	<input type="email" name="typeemail" id="typeemail" value="<?php echo htmlentities($_REQUEST['typeemail']); ?>" /> <br /><br />

	<fieldset>
	<legend>Favorite Flavor:</legend>
	<label><input type="radio" name="typeflavor" value="Cherry" /> Cherry</label><br />
	<label><input type="radio" name="typeflavor" value="Orange" /> Orange</label> <br />
	<label><input type="radio" name="typeflavor" value="Limeade" /> Limeade</label> <br />
	<label><input type="radio" name="typeflavor" value="Grape" /> Grape</label>
	</fieldset><br />
	
	<label>Favorite Location:</label>
	<select name='location'>
	<option>Select a Location</option>
	<option value='Greenway'>Rose Kennedy Greenway</option>
	<option value='GovtCenter'>Government Center</option>
	<option value='BostonCommons'>Boston Commons</option>
	</select><br /><br />
	
	<label for="type-mailtype">Subscribe to the following newsletters?:<br /></label>
	<input type="checkbox" name="mailtype" value="FlavorBlast" /> Frosty's Weekly Flavor Blast<br />
	<input type="checkbox" name="mailtype" value="MonthlyUpdate" /> Monthly Company Updates<br /><br />
	
	<input type="submit" value="Submit" />

</form>
<?php } ?>

</section>
<?php include('footer.inc.php'); ?>