<?php
/*
Template Name: Home Page
*/
get_header(); ?>



    <section role="main" class="home-content"> <!--  m-all t2 d2-d4 -->
      
      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>
      

    </section> <?php # /main ?>

<?php get_footer(); ?>