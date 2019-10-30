<footer>
  <div class="row">
    <div class="col-lg-4 d-flex align-items-center justify-content-center">
      <nav>
        <?php
          if(has_nav_menu('footer-left')){
          wp_nav_menu(array('theme_location' => 'footer-left' , 'container_class' => 'footer-left-class'));
        }else{
          echo "Please select a footer left menu through the dashboard";
        }
        ?>
      </nav>
  </div>

  <div class="col-lg-4 d-flex align-items-center justify-content-center">
    <?php dynamic_sidebar('middle-footer') ?>
  </div>

  <div class="col-lg-4 d-flex align-items-center justify-content-center">
    <?php dynamic_sidebar('right-footer') ?>
  </div>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
