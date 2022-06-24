<?php 
get_header();
while(have_posts()) { the_post();
    ?>
      <div class="col-sm-9">
        <div class="single-content" >
            <?php the_title('<h1>', '</h1>'); ?>
            <div class="post-time">
                <span><?php echo get_the_date(); ?></span>
                <span>This post was written by <?php the_author(); ?></span>
                <hr>
            </div>
            <div class="main-content">
                <?php the_content(); ?>
            </div>
        </div>
      </div>
      <div class="col-sm-3">
        <?php get_sidebar(); ?>
      </div>
    <?php 
    
}
get_footer();