<?php
/**
 * Template Name: sweetidea-main
 */
get_header(); ?>

<section id='top-background' class='clearfix'>
<div id='top-wrapper'>
<div id='top-textbox'>
<h1>Your friendly late-night cookie delivery service!</h1>
<h2>$5 for 6 cookies. Free delivery. 9PM to 3AM. Thursday, Friday, and Saturday. Text 424-241-2825 or tweet @haveasweetidea.</h2>
<p>Sweet Idea is a simple concept: homemade cookies delivered to your doorstep via bicycle—rain, snow, hurricane, doesn’t matter. I wear an orange jumpsuit and am really easy to spot and flag down for superfast deliciousness.</p>
</div>
<div id='bike-guy'>
<img src='<?php bloginfo('template_directory'); ?>/images/bike-guy2.png' alt='Logo2'>
</div>
</div>
</section>

<section id='recent-news' class='clearfix'>
<div class='content-wrapper'>
<div id='blog-column'>
<?php
$home_query = new WP_Query('showposts=2');
if ( $home_query -> have_posts() ) : while ( $home_query -> have_posts() ) : $home_query -> the_post(); ?>
 
  <!-- Display the Title as a link to the Post's permalink. -->
 <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
<footer class='blogdate'><?php the_time('F jS, Y') ?></footer>

 <!-- Display the Post's Content in a div box. -->
<article class='blog-post'>
   <?php the_content(); ?>
 </article>

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>

<h2><a href='/sweet/blog'>>> Read Older Posts</a></h2>
</div>

<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>