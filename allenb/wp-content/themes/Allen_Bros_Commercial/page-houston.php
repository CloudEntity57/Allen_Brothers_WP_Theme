<?php
  /*
  Template Name: Houston page
  */
 ?>
<?php get_header(); ?>
<div class="houston-header"></div>
<?php
  $args = array(
    'post_type' => 'houston_area'
  );
  $loop = new WP_Query( $args )
 ?>
 <div class="container">

   <section class="row">
     <div class="small-12 columns text-center">
       <div class="wrap">
         <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

         <div class="column-general">
           <a href=<?php echo get_template_directory_uri . '/houston-facts/'?> ref='top' >Back To Top</a>
           <h1><?php the_title(); ?></h1>
           <p>
              <img class='picture-box2' src=<?php the_field('side_image'); ?> alt="houston skyline" />
             <?php the_field('text') ?>
           </p>
         </div>



        <?php endwhile; else : ?>

        	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>

        <?php endif; ?>
       </div>
     </div>
   </section>
  </div>

 <?php get_footer(); ?>
