<?php
/**
 * Template Name: sweetidea-interior
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
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class='internalcontent'>
    <h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		</article>
 <?php endwhile; else: ?>
 <?php endif; ?>

</div>
<?php get_sidebar(); ?>
</div>
</section>

<?php get_footer(); ?>