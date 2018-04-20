
<!doctype html>
<html>
    <head>
        <meta charset = "utf-8">
        <title><?php bloginfo('name') ?></title>
        <!-- <link href="AB-Realtors.css" type="text/css" rel="stylesheet">
        <link href="normalize.css" type="text/css" rel="stylesheet"> -->
        <?php wp_head(); ?>
    </head>
    <header>
      <div id="title-row2">
        <div id = "top-row">
          <div>
            <a href="index.htm">
              <img src = <?php echo get_template_directory_uri() . "/images/ab_svg_logo.svg"  ?> id="top-picture">
            </a>
          </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".company-info">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <div class="company-info"><b>Allen Brothers Commercial</b>
          Houston, TX<br>
          800-377-2292
          </div>
        </div>
      </div>
    </header>
    <body <?php body_class(); ?>>
      <!-- <div class="nav-slide clearfix"> -->
      <?php

      // here we create a defaults array to load into built in function, which points to the 'primary-menu' custom menu we created in dashboard, and it takes multiple arguments pertaining to the styling and features of the nav menu
      class My_Walker_Nav_Menu extends Walker_Nav_Menu { function start_lvl(&$output, $depth = 0, $args = Array() ) { $indent = str_repeat("\t", $depth); $output .= "\n$indent<ul class=\"sub-menu4\">\n"; } };

        $defaults = array(
          'container' => false,
          'theme_location' => 'primary-menu',
          'menu_class' => 'nav-body',
          'walker'=> new My_Walker_Nav_Menu()
        );

        wp_nav_menu( $defaults );
      ?>
      <!-- </div> -->
        <!-- <ul class = "nav-body3">
            <li><a href="index.htm">
                Home</a></li>
            <li><a href="Houston-TX.htm" target="_top">
                Houston, TX</a></li>
            <li><a href="About-us.htm">
                About Us</a></li>
            <li><a href="AB-properties.htm">
                Properties</a></li>
            <li><a href="AB-contactus.htm">
                Contact Us</a></li>
            <li><a href="AB-helpful_links.htm">
                Helpful Links</a></li>
            <li><a href="AB-legal_notices.htm">
                Legal Notices</a></li>
            </li>
          </ul> -->
