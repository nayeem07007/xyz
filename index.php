<?php
    get_header();
?>
                <?php while(have_posts()):the_post(); ?>
                    <div class="card">
                       <?php if(has_post_thumbnail()){
                        the_post_thumbnail('full', ['class'=>'img-fluid']);
                       }?>
                       
                         <div class="card-body">
                         <?php the_title('<h5 class="card-title">','</h5>'); ?>
                            <p class="card-text">
                            <?php the_excerpt(); ?>
                            </p>
                             <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
               <?php endwhile; ?>
       


<?php

    get_footer();

    
    
  