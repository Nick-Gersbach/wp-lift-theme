<!-- 11:24 Blog Listing Page -->
<?php
get_header('blog');
?>
<div class="blog-page-wrapper">
  <div class="narrow-blog-posts-container">
    <!-- Output Blog Posts Dynamically -->
    <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="post-item mx-auto pb-5">
             <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('blog-medium');?>" class="img-fluid post-featured-img d-block mx-auto mb-4">
    <?php endif;?>
          <h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <div class="meta-box mx-auto text-center mt-3">
              <p>By: <?php the_author_posts_link(); ?> Published: <?php the_time('F-d-Y'); ?> <?php echo get_the_category_list(', ') ?></p>
          </div>
          <!-- Get Excerpts For Each Blog Post -->
          <div class="generic-content mb-3 mx-auto text-center">
            <?php the_excerpt(); ?>
            <p><a href="<?php echo the_permalink(); ?>">Continue Reading &raquo;</a></p>
          </div>
      </div>
      <?php
    }
    //echo paginate_links();
    ?>

    
  </div>
</div>

<div class="pagination-links">
<?php  echo paginate_links(); ?>
</div>

<?php
get_footer();
?>

