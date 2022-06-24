<?php
get_header();
?>

<?php while(have_posts()):the_post(); ?>
        <div class="card">
           <?php if(has_post_thumbnail()){
              the_post_thumbnail('thumbnail');
           } ?>
            <div class="card-body">
                <?php the_title('<h5 class="card-title">','</h5>'); ?>
                <p class="card-text"> <?php the_excerpt(); ?> </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
           </div>
       </div>
    <?php endwhile; ?>

<?php
get_footer();
?>    

   

