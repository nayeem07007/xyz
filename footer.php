            
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <?php 
      $args =[
          'theme_location' => 'footer_menu',
          'menu_class' => 'navbar-nav me-auto xyz-menu',
          'container' => ''
      ];
      wp_nav_menu($args);

      ?>

    </div>
  </div>
</nav>

            </div>
        </div>
    <?php wp_footer(); ?>
</body>
</html>