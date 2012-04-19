<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Frosty's Snowcones</title>
  <style>
    nav a { color:black; }
    nav a.selected, nav a:hover { color:pink; }
  </style>

</head>
<body>
<header id='site-header'>
  <h1>Frosty's Snowcones!!!!!!</h1>
</header>
<nav id='main-nav'>
 <ul>
    <li>
      <a <?php if($page=='home') { echo "class='selected'"; } ?> href="index.php">Home</a></li>
    <li>
      <a <?php if($page=='about') { echo "class='selected'"; } ?>  href="about.php">About</a></li>
    <li>
      <a href="contact.php">Contact</a></li>
 </ul>
</nav>
<section id='content'>

