<?php
get_header();

while(have_posts()): the_post();
?>

    <div class="card">
        <?php the_title('<div class="card-header"><a href="'.get_the_permalink(get_the_ID()).'">', '</a></div>'); ?>
        
        <div>
            <?php the_post_thumbnail('image_450x300', ['class'=> 'img-fluid']); ?>
        </div>

        <?php the_excerpt(); ?>
    </div>

<?php
endwhile;

?>

<?php
get_footer();

