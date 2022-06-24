<?php
            $args=[
                'theme_location'=>'footer_menu',
                'menu_class'=>'nav xyz-footer-menu',
                'container'=>''
            ];
            wp_nav_menu($args);
            
            ?>

<ul class="nav xyz-footer-menu">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

</div>
        </div>



    
    
   
    <?php wp_footer(); ?>
</body>
</html>