<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <?php wp_head(); ?>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name') ?></title>
</head>
<body <?php body_class(); ?>>
<!-- <div id="container"> -->
<?php
  $args = array(
    'post_type' => 'landing_header'
  );
  $loop = new WP_Query( $args );
?>
    <div class="navbar navbar-default navbar-fixed-top" id="top-navbar">
        <div class="container" style="margin-top:68px;" >
          <?php $defaults = array(
              'container' => false,
              'theme_location' => 'landing-menu',
              'menu_class' => 'allen_menu nav navbar-nav navbar-right'
            );

           ?>
          <div class="row">
            <a class="navbar-brand" href="/" id="ABPhotoContainer">
              <?php if($loop -> have_posts()) :  while($loop -> have_posts()) : $loop -> the_post() ?>
              <img alt="Brand" src=<?php the_field('main_logo') ?> onerror="ab commercial logo for web 070302.gif" id="ABPhoto" class="img-responsive">
            </a>
            <div class="col-sm-8">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          <!-- <div class = "collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
              <li><a href='AB-contact-form.php'>Contact Us</a></li>
              <li><a href='AB-helpful_links.php'>Helpful Links</a></li>
              <li><a href='AB-legal_notices.php'>Legal Notices</a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
    <div id="coolCarousel" class="carousel slide" data-ride="carousel">
      <?php  wp_nav_menu( $defaults ); ?>
      <ol class="carousel-indicators">
        <li data-target="#coolCarousel" data-slide-to="0" class="active">
        </li>
      </ol>
      <div class="carousel-inner">
        <div class="item soHigh active" id="ho">
        </div>
      </div>
      <a class="left carousel-control" data-slide="prev" href="#coolCarousel"><span class="icon-prev"></span></a>
      <a class="right carousel-control" data-slide="next" href="#coolCarousel"><span class="icon-next"></span></a>
    </div>

    <?php $htmlStr = 'hellooo'; ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      console.log('<?php echo $htmlStr; ?>');
      var photoList = [

          '<?php the_field('image_1') ?>',
          '<?php the_field('image_2') ?>',
          '<?php the_field('image_3') ?>'

      ];

      var firstItem = $("#ho");
      var firstInsertion = "<div class='item'><div class='thePhoto' style='background:url("+photoList[0]+") no-repeat;background-size:cover;background-position:center'></div></div>";
      $(firstItem).append(firstInsertion);

    for(i=1; i<photoList.length; i+=1){
      var yoyo = "<div class='item'><div class='thePhoto' style='background:url("+photoList[i]+") no-repeat;background-size:cover; background-position:center''></div></div>";
      var gogo = $(".carousel-inner");
      $(gogo).append(yoyo);
    };

     for(i=1; i<photoList.length; i+=1){
       var carouselIndicators = $(".carousel-indicators");
       var $newButton = "<li data-target='#coolCarousel' data-slide-to='"+i+"'></li>";
       $(carouselIndicators).append($newButton);
     };
   });
    </script>

  <?php endwhile; endif; wp_reset_postdata(); ?>

        <!-- <div class = "navbar navbar-default"  id="theNav">
            <div class="container">
              <ul class="nav navbar-nav">
                <li class="button"><a href='/'>Home</a> </li>
                <li><a href='Houston-TX.php'>Houston, TX</a></li>
                <li><a href='About-us.php'>About Us</a></li>
                <li><a href='AB-properties.php'>Properties</a></li>
              </ul>
            </div>
        </div> -->
        <main>
        <div class="container">
        <div class="row">
        <div class="col-sm-8">
          <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <!-- <h1><?php the_title(); ?></h1> -->
            <p><?php the_content(); ?></p>
            </div>
            <div class="col-sm-4">
            <img class = "img-responsive hidden-xs" src= <?php echo get_template_directory_uri() . "/images/TX_Marker.jpg" ?> alt="Texas Entrance Marker" >

            <?php endwhile; endif; ?>
        </div>
        </div>
            </div>
    </body>
        </main>
 <div class = "nav-footer">
            <div class="link-container">
            <div>&nbsp;<a href="index.htm">
                Home</a>&nbsp; - </div>
            <div>&nbsp;<a href="Houston-TX.htm" target="_top">
                Houston, TX</a>&nbsp; - </div>
            <div>&nbsp;<a href="About-us.htm">
                About Us</a>&nbsp; - </div>
            <div>&nbsp;<a href="AB-comproperties.htm">Commercial Properties</a>&nbsp; - </div>
        <div>&nbsp;<a href="AB-resproperties.htm">Residential Properties</a>&nbsp; - </div>
            <div>&nbsp;<a href="AB-contactus.htm">
                Contact Us</a>&nbsp; - </div>
            <div>&nbsp;<a href="AB-helpful_links.htm">
                Helpful Links</a>&nbsp; - </div>
            <div>&nbsp;<a href="AB-legal_notices.htm">
                Legal Notices</a>&nbsp; - </div>
        </div>
        </div>
<?php get_footer(); ?>
