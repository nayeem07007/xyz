<?php
get_header();
while(have_posts()); the_post();
?>
<div class="card">
<?php the_title('<div class="card-header"><a href="'.get_the_permalink(get_the_ID()).'">','</a></div>') ?>
<div>
    <?php
    get_the_thumbnail('full',['class'=>'img-fluid ']);
    ?>
</div>
<?php the_excerpt(); ?>
  

</div>
<?php
endwhile;
?>
<?php
get_footer();