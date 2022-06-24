<?php 
/**
 * XYZ main tempalte to dispay latest post 
 * @scince 1.0
 */

 get_header();

while(have_posts()) : the_post();
?>
<div class="card" style="width: 18rem;">
  <?php if(has_post_thumbnail()): ?>
  <?php the_post_thumbnail('image_300x300'); ?>
  <?php endif; ?>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <?php the_title('<h5 class="card-title">', '</h5>'); ?>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
  </div>
</div>
<?php 
endwhile;
 the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '<', 'textdomain' ),
    'next_text' => __( '>', 'textdomain' ),
) ); 

get_footer();