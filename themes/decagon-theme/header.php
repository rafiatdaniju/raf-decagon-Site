<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Decagon trains software engineers in fullstack Javascript (Node JS/React JS), C# (.NET Core), Java ( Spring framework), Mobile app development (React Native) in Nigeria. We build high-performing engineering teams that are agile, work ready and outcome-oriented. Find and hire verified Nigerian software engineers to join your team full-time or remotely."
    />
    <meta
      property="og:title"
      content="Hire software engineering talent | Decagonhq.com"
    />
    <meta property="og:url" content="https://decagonhq.com/" />
    <meta
      property="og:description"
      content="Decagon trains software engineers in fullstack Javascript (Node JS/React JS), C# (.NET Core), Java ( Spring framework), Mobile app development (React Native) in Nigeria. We build high-performing engineering teams that are agile, work ready and outcome-oriented. Find and hire verified Nigerian software engineers to join your team full-time or remotely."
    />
    <meta property="og:type" content="article" />
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    
    <?php wp_head()?>
  </head>

  <body <?php body_class();?>>
    <!--Header Section-->
    <?php if(get_header_image()){?> 
      
      <header <?php if(is_home()){?>class="home-header" style="background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php header_image()?>)
      <?php 
      }
      elseif(is_page_template('page-contact.php') ){?>class="contact-header

      <?php
      }else{?>class="other-header" style="background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php header_image()?>)
      <?php
      }
      ?>">
      <?php
      }
      ?>
      
      <!-- Navbar Section-->
      <section class="navigation" id="mynav">
        <div class="container">
          <nav
            class="navbar sticky-top navbar-expand-lg navbar-dark bg-transparent"
          >
            <div class="container-fluid">
              <a class="navbar-brand" href="/"
                >
              <?php
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  $logoURL = $logo[0];
                  if ( has_custom_logo() ) {
                          echo '<img class="header__logo" src="' . esc_url($logoURL) . '" alt="' . get_bloginfo( 'name' ) . '">';
                  } else {
                          echo '<h3>'. get_bloginfo( 'name' ) .'</h3>';
                  }
              ?>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <?php
                wp_nav_menu( [ 
                    'theme_location' => 'main_menu', 
                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                    'container' => null
                    ] ); 
              ?>
              
              </div>
            </div>
          </nav>
        </div>
      </section>

     
