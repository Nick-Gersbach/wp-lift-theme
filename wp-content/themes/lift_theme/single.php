<?php get_header('blog-post'); ?>
<div class="blog-post-wrapper">
    <?php if(have_posts() ): while(have_posts() ): the_post();?>
    <h1><?php the_title(); ?></h1>
       <div class="meta-box">
              <p>By: <?php the_author_posts_link(); ?> on <?php the_time('F-d-Y'); ?> <?php echo get_the_category_list(', ') ?></p>
          </div>

    <?php the_content();?>

    <?php endwhile; else: endif;?>
</div>

<?php get_footer() ?>