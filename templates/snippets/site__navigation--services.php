<div class="site__navigation--service" id="nav-services"   role="navigation" >
  <div class="navigation--services" >
    <div class="grid">
      <div class="navigation--service__menu">
        <div class="menu--services ">
          <?php
          wp_nav_menu(array('theme_location' => 'services',
              'container' => 'nav',
              'container_class' => 'menu--services__container',
              'menu_class' => 'menu--services__menu-list'
                  )
          );
          ?>
          <!-- menu -->
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- #site-navigation -->
</div>
