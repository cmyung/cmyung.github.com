<?php $page="contact"; ?>
<?php include('header.inc.php'); ?>
<h1>Contact Us</h1>
<?php

if(isset($_REQUEST['name'])) {
  // Now we need to process the form

  $submitted = true;

  if(!$_REQUEST['name']) {
    $submitted = false;
    $name_error = true;
  }

  if(!$_REQUEST['email']) {
    $submitted = false;
    $email_error = true;
  }

}

if($submitted) {
  $name = $_REQUEST['name'];
  echo "Thank you for your submission $name!";
  $body = "";
  $body .= "Name: $_REQUEST[name]\n";
  $body .= "Email: $_REQUEST[email]\n";
  $body .= "Flavor: $_REQUEST[flavor]\n";

  mail("pascal@cykod.com","Snow cone contact from: $name", $body);
} 
else {
?>


<!--lorem-->
<form action='?' method='post'>

<?php if($name_error) { echo "<em>Please enter you name</em><br/>"; } ?>
<label for='name'>Name</label>
<input name='name' id='name' value="<?php echo htmlentities($_REQUEST['name']); ?>" /><br/>


<?php if($email_error) { echo "<em>Please enter you email</em><br/>"; } ?>
<label for='email'>Email</label>
<input name='email' id='email'  value="<?php echo htmlentities($_REQUEST['email']) ?>"/><br/>

<fieldset>
<legend>Favorite Flavor</legend>
<label id='vanilla'>Vanilla</label> 
<input type='radio' name='flavor' value='vanilla' id='vanilla'/><br/>

<label> <input type='radio' name='flavor' value='chocolate'/> Chocolate</label><br/>
</fieldset>

<label>Favorite Size</label>
<select name='size'>
  <option>--Select a flavor--</option>
  <option value="small">Small</option>
  <option value="med">Medium</option>
  <option value="large">Large</option>
</select>

<label><input type='checkbox' name='newsletter' value='1'/> Sign up for our newsletter</label><br/>



<input type='submit' value='Submit'/>
</form>

<?php } ?>

<!--/lorem-->
<?php include('footer.inc.php'); ?>
