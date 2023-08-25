<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package blogdu
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'blogdu' ); ?></a>
    <div class="wrapper" id="custom-background-css">
      <!--header--> 
      <header class="bs-headfive"> 
      <!-- Main Menu Area-->
      <div class="bs-header-main d-none d-lg-block" style="background-image: url('images/header.jpg');">
        <div class="inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-2">
                <?php do_action('blogus_action_header_social_section'); ?>
              </div>
              <div class="navbar-header col-lg-8">
                <?php the_custom_logo(); 
              if (display_header_text()) : ?>
              <div class="site-branding-text">
                  <?php if (is_front_page() || is_home()) { ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                  <?php } else { ?>
                  <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                  <?php } ?>
                  <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
              </div>
              <?php endif; ?>
              </div>
              <div class="col-lg-2 d-none d-lg-flex justify-content-end">
                <!-- Right nav -->
                <div class="info-right right-nav d-flex align-items-center justify-content-center justify-content-md-end">
                  <?php $blogus_menu_search  = get_theme_mod('blogus_menu_search','true'); 
                    $blogus_subsc_link = get_theme_mod('blogus_subsc_link', '#'); 
                    $blogus_menu_subscriber  = get_theme_mod('blogus_menu_subscriber','true');
                    $blogus_subsc_open_in_new  = get_theme_mod('blogus_subsc_open_in_new', true);
                  if($blogus_menu_search == true) { ?>
                <a class="msearch ml-auto" href=".bs_model" data-bs-toggle="modal">
                  <i class="fa fa-search"></i>
                </a> 
              <?php } if($blogus_menu_subscriber == true) { ?>
                <a class="subscribe-btn" href="<?php echo esc_url($blogus_subsc_link); ?>" <?php if($blogus_subsc_open_in_new) { ?> target="_blank" <?php } ?> ><i class="fas fa-bell"></i></a>
              <?php } $blogus_lite_dark_switcher = get_theme_mod('blogus_lite_dark_switcher','true');
                if($blogus_lite_dark_switcher == true){ ?>
                <label class="switch" for="switch">
                  <input type="checkbox" name="theme" id="switch">
                  <span class="slider"></span>
                </label>
              <?php } ?>     
                </div>
                <!-- /Right nav -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Main Menu Area-->
      <div class="bs-menu-full">
        <nav class="navbar navbar-expand-lg navbar-wp">
          <div class="container">
            <!-- Right nav -->
            <div class="m-header align-items-center">
              <!-- navbar-toggle -->
              <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-wp" aria-controls="navbar-wp" aria-expanded="false"
                aria-label="Toggle navigation"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-header">
                <?php the_custom_logo(); 
                  if (display_header_text()) : ?>
                <div class="site-branding-text">
                  <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                  <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
                </div>
                <?php endif; ?>
              </div>
              <div class="right-nav"> 
                <?php $blogus_menu_search  = get_theme_mod('blogus_menu_search','true'); 
                  if($blogus_menu_search == true) { ?>
                    <a class="msearch ml-auto" href=".bs_model" data-bs-toggle="modal"> <i class="fa fa-search"></i> </a>
                <?php } ?>
              </div>
            </div>
            <!-- /Right nav -->
            <!-- Navigation -->
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="navbar-wp">
              <?php $blogus_menu_align_setting = get_theme_mod('blogus_menu_align_setting','mx-auto');
                if(is_rtl()) { wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'  => 'nav-collapse collapse',
                        'menu_class' => 'nav navbar-nav sm-rtl',
                        'fallback_cb' => 'blogus_fallback_page_menu',
                        'walker' => new blogus_nav_walker()
                  ) ); 
                } else
                {
                  wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'  => 'nav-collapse collapse',
                    'menu_class' => $blogus_menu_align_setting . ' nav navbar-nav',
                    'fallback_cb' => 'blogus_fallback_page_menu',
                    'walker' => new blogus_nav_walker()
                  ) );
              } ?>
            </div>
            <!-- Right nav -->
             
            <!-- /Right nav -->
          </div>
        </nav>
      </div>
      <!--/main Menu Area-->
    </header>
<!--mainfeatured start-->
<div class="mainfeatured">
    <!--row-->
    <div class="row">              
      <?php do_action('blogdu_action_front_page_main_section_1'); ?> 
    </div><!--/row-->
</div>
<!--mainfeatured end-->
<?php
do_action('blogus_action_featured_ads_section');
?>   