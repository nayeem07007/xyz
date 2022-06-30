<?php
get_header();
if(have_posts()){
    get_search_form();

while(have_posts()); the_post();

?>
<div class="card mt-5">
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
the_post_pagination();
}else{
    echo"No search result found";
    get_search_form();
}
?>
<?php
get_footer();