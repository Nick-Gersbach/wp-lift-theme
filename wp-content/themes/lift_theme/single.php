<?php get_header('blog-post'); ?>
<div class="blog-post-wrapper">
    <?php if(have_posts() ): while(have_posts() ): the_post();?>
    <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid post-featured-img d-block mx-auto mb-4">
    <?php endif;?>
    <h1 class="text-center"><?php the_title(); ?></h1>
       <div class="meta-box mt-3 text-center">
              <p>By: <?php the_author_posts_link(); ?> on <?php the_time('F-d-Y'); ?> <?php echo get_the_category_list(', ') ?></p>
          </div>

    <div class="blog-post-content mb-5">
    <?php the_content();?>
    </div>
    <?php endwhile; else: endif;?>

    <?php comments_template(); ?>
</div>

<?php get_footer() ?>