<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
        <div class="main">
            <div class="container">
                <?php while(have_posts()):the_post(); ?>
                    <div class="card">
                       <?php if(has_post_thumbnail()){
                        the_post_thumbnail('full');
                       }
                       ?>
                         <div class="card-body">
                         <?php the_title('<h5 class="card-title">','</h5>'); ?>
                            <p class="card-text">
                            <?php the_excerpt(); ?>
                            </p>
                             <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
               <?php endwhile; ?>
            </div>
        </div>



    
    
   
    <?php wp_footer(); ?>
</body>
</html>