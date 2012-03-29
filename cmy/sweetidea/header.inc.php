<!DOCTYPE html>
<head>
  <meta charset='utf-8'>
  <title>Sweet Idea Cookie Delivery</title>
  <meta property="og:title" content="SWEET IDEA Cookies" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://haveasweetidea.com" />
  <meta property="og:image" content="http://haveasweetidea.com/images/logo-cookies.jpg" />
  
  <link rel='shortcut icon' href='favicon.ico' />
  <link rel='stylesheet' type='text/css' href='css/sweet-css.css' />
    
  <link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'>
  
  <!-- Sea of Clouds Twitter -->
<link href="css/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script language="javascript" src="js/jquery.tweet.js" type="text/javascript"></script>

<script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "haveasweetidea",
			avatar_size: 32,
			count: 3,
          template: "{text}<br/>{time} &raquo; {retweet_action}"
        });
      }).bind("loaded", function(){
        $(this).find("a.tweet_action").click(function(ev) {
          window.open(this.href, "Retweet", 'menubar=0,resizable=0,width=550,height=420,top=200,left=400');
          ev.preventDefault();
        });
      });
</script>
</head>

<body>
<header>
<!--<div id='arrow-space'>
<img src='images/green-arrow.png' alt='Click here to order' width='53' height='65'>
</div>-->
<nav>
<div id='nav-wrap'>
  <ul>
    <li><a href='about.html'>ABOUT</a></li>
    <li><a href='news.html'>NEWS</a></li>
    <li><a href='index.html'><img src="images/sweet-logo.png" alt="site logo" width="284" height="188"></a></li>
    <li><div id='arrow-float'><img src='images/green-arrow.png'><a href='about.html'>ORDER</a></div></li>
    <li><a href='news.html'>CONTACT</a></li>
  </ul>
</div>
</nav>
</header>