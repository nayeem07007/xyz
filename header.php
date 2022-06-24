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

            <?php
            $args=[
                'theme_location'=>'header_menu',
                'menu_class'=>'nav xyz-menu',
                'container'=>''
            ];
            wp_nav_menu($args);
            
