<?php
get_header();
if(have_posts()){
    get_search_form();
while(have_posts()): the_post();

?>
<div class="card mt-5">
    <?php the_title('<div class="card-header"><a href=" '.get_the_permalink(get_the_ID()).' ">', '</a></div>'); ?>
    <?php the_excerpt(); ?>
    <div>
        <?php the_post_thumbnail('image_450x300', ['class'=>'img-fluid']); ?>
    </div>
 
  
</div>
<?php
endwhile;
the_posts_pagination();
}else{
    echo "no search result found";
    get_search_form();
}
    
?>

<?php
get_footer();