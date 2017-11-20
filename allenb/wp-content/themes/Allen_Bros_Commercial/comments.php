<?php get_header(); ?>

<div id="comments" class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if(have_comments()): ?>
        <ol>
          <?php
          wp_list_comments(array(
            'style'      => 'ol',
    				'short_ping' => true,
    				'avatar_size'=> 34,
          ));
           ?>
        </ol>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>

</div>
