<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php while(have_posts()): the_post(); ?>
<?php the_title('<h2><a href=" '.get_the_permalink().' ">','</a></h2>'); ?>
<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
<?php endwhile; ?>
</body>
</html>