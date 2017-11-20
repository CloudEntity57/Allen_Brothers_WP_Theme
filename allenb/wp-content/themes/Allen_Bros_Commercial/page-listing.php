<?php
  /*
  Template Name: Listing page
  */
 ?>
<?php get_header(); ?>
<?php
  $args = array(
    'post_type' => 'listing'
  );
  $loop = new WP_Query( $args )
 ?>
<div class="wrap">
  <div class="column-container">
    <div class="column-general">
       <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="row properties panel">

          <div class="col-sm-4 litebox">

          <a href=<?php echo the_field('image') ?> class="thumbnail hidden-xs"><img src=<?php echo the_field('image') ?> class="img-responsive" alt=<?php the_field('address') ?>></a>

          </div>
          <div class="col-sm-8">
            <div class="lead">
              <?php the_field('address') ?> &nbsp;<b><?php the_field('listing_status') ?></b> <br>
            </div>
            <br>
            <p><?php the_field('listing_description') ?></p>

          </div>

        </div>
      <?php endwhile; else : ?>

      	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>

      <?php endif; ?>
      </div>
    </div>
  </div>
</body>

 <?php get_footer(); ?>
