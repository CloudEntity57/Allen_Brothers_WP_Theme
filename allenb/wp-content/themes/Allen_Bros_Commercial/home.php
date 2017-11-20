<?php get_header(); ?>

<div class="container">
  <section class="row">
     <h1><?php wp_title( '' ); ?></h1>
     <div class="leader">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <h1><?php the_title(); ?></h1>
       <p><?php the_content(); ?></p>

       <p class="meta">
         By <?php the_author_posts_link(); ?>
         on <?php echo the_time('l, F jS, Y'); ?>
         <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
       </p>
       <?php
       $args = array(
         'comment_field' => '<p class="comment-form-comment">'
         .'<label for="comment">' . _x( 'Comment', 'noun' ) . '</label>'
         .'<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
         'class_submit' => 'btn btn-primary'
       );
        ?>

      <?php endwhile; else : ?>

      	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>

      <?php endif; ?>
     </div>
  </section>
</div>

 <?php get_footer(); ?>
