<?php $page='contact'; ?>
<?php include('header.inc.php'); ?>

<section id='top-background-small' class='clearfix'>
<div id='top-wrapper-small'>
<div id='bike-guy-small'>
<img src='images/bike-guy-small.png'>
</div>
</div>
</section>

<section id='recent-news' class='clearfix'>
<div class='content-wrapper'>
<div id='blog-column'>
<section id='contact'>
<h1>Contact</h1>

<p>Looking for more information? There are a few different ways you can reach us:</p>

<p>E-mail – <a href='#'>john@haveasweetidea.com</a></p>
<p>Twitter – <a href='#'>@haveasweetidea</a></p>
<p>Facebook – <a href='#'>www.facebook.com/haveasweetidea</a></p>

<p>Or fill out the form below:</p>
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

  if(!$_REQUEST['feedback']) {
    $submitted = false;
    $feedback_error = true;
  }
  
}

if($submitted) {
  $name = $_REQUEST['name'];
  echo "<h2>Thank you for your submission $name!</h2>";
  $body = "";
  $body .= "Name: $_REQUEST[name]\n";
  $body .= "Email: $_REQUEST[email]\n";
  $body .= "Feedback: $_REQUEST[feedback]\n";

  mail("cmyungweb@gmail.com","Web feedback from $name", $body);
} 
else {
?>


<!--lorem-->
<form action='?' method='post'>

<section class='contact'><label for='name'><h3>Name</h3></label>
<input name='name' id='name' value="<?php echo htmlentities($_REQUEST['name']); ?>" /><?php if($name_error) { echo "<h4>Please enter your name</h4><br/>"; } ?></section>


<section class='contact'><label for='email'><h3>Email Address</h3></label>
<input name='email' id='email'  value="<?php echo htmlentities($_REQUEST['email']) ?>"/><?php if($email_error) { echo "<h4>Please enter your email</h4><br/>"; } ?></section>

<section class='contact'><h3>TELL ME HOW TO MAKE YOU HAPPY</h3>
<textarea cols=40 rows=10 name='feedback'></textarea><?php if($feedback_error) { echo "<h4>You didn't say anything.</h4><br/>"; } ?></section>

<input type='submit' value='Submit'/>
</form>

<?php } ?>

</section>
</div>

<?php include('aside.inc.php'); ?>
</div>
</section>

<?php include('footer.inc.php'); ?>