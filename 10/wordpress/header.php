<?php
/**
 * @package WordPress
 * @subpackage Sweet_Idea
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
?></title>
  <meta property="og:title" content="SWEET IDEA! Cookies" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://cmyung.com/sweet" />
  <meta property="og:image" content="http://cmyung.com/sweet/images/ogimage.jpg" />
  <meta property="og:description" content="$5 for 6 cookies. Free delivery. 9PM to 3AM. Thursday, Friday, Saturday. Text 424-241-2825." />
  
  <link rel='shortcut icon' href='favicon.ico' />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'>
  
  <!-- Sea of Clouds Twitter -->
<link href="<?php bloginfo('template_directory'); ?>/css-extra/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script language="javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js" type="text/javascript"></script>

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
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<header>
<nav>
<div id='nav-wrap'>
  <ul>
    <li><a href='/sweet/about'>ABOUT</a></li>
    <li><a href='/sweet/blog'>BLOG</a></li>
    <li><a href='/sweet'><img src='<?php bloginfo('template_directory'); ?>/images/sweet-logo.png' alt='site logo' width='284' height='188'></a></li>
    <li><div id='arrow-float'><img src='<?php bloginfo('template_directory'); ?>/images/green-arrow.png' alt='Click here to order'><a href='/sweet/order'>ORDER</a></div></li>
    <li><a href='/sweet/menu'>MENU</a></li>
  </ul>
</div>
</nav>
</header>