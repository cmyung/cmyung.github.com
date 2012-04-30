<?php
/**
 *
 * @package WordPress
 * @subpackage Sweet_Idea
 */
get_header(); ?>

<section id='top-background-small' class='clearfix'>
<div id='top-wrapper-small'>
<div id='bike-guy-small'>
<img src='<?php bloginfo('template_directory'); ?>/images/bike-guy-small.png'>
</div>
</div>
</section>

<section id='recent-news' class='clearfix'>
<div class='content-wrapper'>
<div id='blog-column'>
<h1>Blog</h1><br />
<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
  <!-- Display the Title as a link to the Post's permalink. -->
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

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

<h2><?php posts_nav_link('separator','<< Read Newer Posts','>> Read Older Posts'); ?></h2>
</div>

<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>