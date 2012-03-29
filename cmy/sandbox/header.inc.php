<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Frosty's Snowcones</title>
<style>
h1 {color:blue;}
nav a {color:blue;}
nav a.selected, nav a:hover {color:pink;}
</style>
</head>

<body>
<header id='site-header'>
<h1>Frosty's Snowcones</h1>
<nav>
<ul>
<li><a <?php if($page=='home') {echo "class='selected'";} ?> href='index.php'>Home</a></li>
<li><a <?php if($page=='about') {echo "class='selected'";} ?> href='about.php'>About</a></li>
<li><a <?php if($page=='contact') {echo "class='selected'";} ?> href='contact.php'>Contact</a></li>
</ul>
</nav>
</header>