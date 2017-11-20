<?php
  /*
  Template Name: Helpful Links
  */
?>
<?php get_header(); ?>
<div class="container">
 <section class="row">
   <div class="small-12 columns text-center">
     <div class="leader">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="container">
           <div class="column-container">
             <div class="column-general">
               <?php the_content(); ?>
             </div>
           </div>
        </div>

      <?php endwhile; else : ?>

      	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>

      <?php endif; ?>
     </div>
   </div>
 </section>
</div>

 <?php get_footer(); ?>
