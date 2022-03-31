<!-- 11:24 Blog Listing Page -->
<?php
get_header('blog');
?>

<div class="blog-page-container">
<div class="row">

<!-- Out Widget Sidebar -->
    <div id="widget-sidebar" class="col-lg-4 order-2 mt-5">
  <?php if(is_active_sidebar('blog-sidebar')): ?>
    <?php dynamic_sidebar('blog-sidebar'); ?>
  <?php endif;?>
  </div>

 
    <div class="col-lg-8 order-1 mt-5">
    <!-- Output Blog Posts Dynamically -->
    <?php
    while(have_posts()) {
      the_post(); ?>
        <div class="post-item pb-5">
              <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('blog-medium');?>" class="img-fluid post-featured-img mb-4">
      <?php endif;?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="meta-box mx-auto mt-3">
                <p>By: <?php the_author_posts_link(); ?> Published: <?php the_time('F-d-Y'); ?> <?php echo get_the_category_list(', ') ?></p>
            </div>
            <!-- Get Excerpts For Each Blog Post -->
            <div class="generic-content mb-3 mx-auto">
              <?php the_excerpt(); ?>
              <p><a href="<?php echo the_permalink(); ?>">Continue Reading &raquo;</a></p>
            </div>
        </div>
     
   
      <?php
    }
    ?>
    </div>
  </div>
  </div>

<div class="pagination-links">
<?php  echo paginate_links(); ?>
</div>

<?php
get_footer();
?>

