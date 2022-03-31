<div class="blog-page-wrapper">
  <div class="narrow-blog-posts-container">
    <!-- Output Blog Posts Dynamically -->
    <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="post-item pb-5 text-center">
      <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid post-featured-img d-block mx-auto mb-4">
    <?php endif;?>

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <div class="meta-box text-center">
              <p>By: <?php the_author_posts_link(); ?> on <?php the_time('F-d-Y'); ?> <?php echo get_the_category_list(', ') ?></p>
          </div>
          <!-- Get Excerpts For Each Blog Post -->
          <div class="generic-content text-center">
            <?php the_excerpt(); ?>
            <p><a href="<?php echo the_permalink(); ?>">Continue Reading &raquo;</a></p>
          </div>
      </div>
   
      <?php
    }

    ?>    
  </div>
</div>

<div class="pagination-links">
<?php  echo paginate_links(); ?>
</div>