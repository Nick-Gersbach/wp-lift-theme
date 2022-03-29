<?php
get_header('archive');
?>
<div class="blog-page-wrapper">
  <div class="narrow-blog-posts-container">
    <!-- Output Blog Posts Dynamically -->
    <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="post-item">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <div class="meta-box">
              <p>By: <?php the_author_posts_link(); ?> on <?php the_time('F-d-Y'); ?> <?php echo get_the_category_list(', ') ?></p>
          </div>
          <!-- Get Excerpts For Each Blog Post -->
          <div class="generic-content">
            <?php the_excerpt(); ?>
            <p><a href="<?php echo the_permalink(); ?>">Continue Reading &raquo;</a></p>
          </div>
      </div>
      <?php
    }
    echo paginate_links();
    ?>

    
  </div>
</div>

<?php
get_footer();
?>

