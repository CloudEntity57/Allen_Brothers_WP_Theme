<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			    <div class="page-header">
			    	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			    	<p class="meta">
			    		By <?php the_author_posts_link(); ?> on <?php echo the_time('l, F jS, Y'); ?>
					  </p>
			    </div>


			    	<?php if( has_post_format( 'image' )): ?>

			    		<p><?php the_post_thumbnail('medium'); ?></p>


			    		<?php the_content(); ?>

			    	<?php elseif ( has_post_format( 'quote' )): ?>

			    		<blockquote>
							<?php the_excerpt(); ?>
			    		</blockquote>

			    		<?php the_content(); ?>

			    	<?php else: ?>

						<?php the_content(); ?>

					<?php endif; ?>


				<!-- <hr> -->


				<hr>

				<?php endwhile; endif; ?>

				<?php comments_template(); ?>
        <?php comment_form($args); ?>
	    	</div>


	    </div>

    </div>

<?php get_footer(); ?>
