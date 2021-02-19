<?php
get_header();
?>
 <!-- Banner Content-->
 <div class="container">
        <div class="home-header__text-box">
          <h1 class="heading-primary">
            Build faster with <span>vetted</span> remote software engineering
            talent.
          </h1>
          <h3 class="heading-secondary">
            Recruiting, training, ongoing HR management and work
            infrastructure<br />
            to help you scale quickly and cost effectively.
          </h3>
          <a href="contact.php" class="btn heading-btn">Build your team</a>
        </div>
      </div>
    </header>
<section class="section-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center">
            <p>Our Engineers have built products for</p>
          </div>
          <div class="col-lg-8">
            <div class="work-with">
            <?php
              $decagonClient = new WP_Query(array(
                'post_type' => 'clients'
              ));
              while($decagonClient->have_posts()){
                $decagonClient->the_post();?>
                <img
                <?php $image = get_the_post_thumbnail_url();?>
                src="<?php echo esc_url($image)?>"
                alt="<?php echo esc_attr(the_title())?>"
                class="img-fluid"
              />
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-why">
      <div class="container">
        <h2>Why Decagon?</h2>
        <div class="why-grid">
          <div class="why-image">
            <img src="<?php echo esc_url(get_theme_file_uri('./assets/img/workspace.jpg'))?>" class="img-fluid" alt="" />
          </div>
          <div class="why-grid--list">
            <div class="why__item">
              <h4 class="why__heading">⭐ Engineering quality</h4>
              <p class="why__text">
                We select and recruit the top 0.5% of tech talent in the cities
                we source from. We run our own Software Engineering Training
                institute which is #1 in Africa.
              </p>
            </div>
            <div class="why__item">
              <h4 class="why__heading">🔌 Easy to work with</h4>
              <p class="why__text">
                Our engineers are all Native English speakers, they work on your
                time-zone and will easily adopt your collaboration tools and
                practices
              </p>
            </div>
            <div class="why__item">
              <h4 class="why__heading">✊🏽 Diverse talent base</h4>
              <p class="why__text">
                <strong>More Black Talent:</strong> Through our operations in
                Africa we are able to give you access to high quality engineers
                from under-represented backgrounds.
              </p>
              <p class="why__text">
                <strong>More Female Talent:</strong> We have an ambitious goal
                to be 50% female by 2025
              </p>
            </div>
            <div class="why__item">
              <h4 class="why__heading">💰 Cost-effective scaling</h4>
              <p class="why__text">
                We help you access talent in regions where there is more
                available supply of top-tier talent.
              </p>
              <p class="why__text">
                Customized on-boarding - we can design a risk-free custom
                onboarding sprint to get your team production ready in your
                environment
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-countries">
      <h4 class="content">
        We currently serve companies in Austin, NYC, Berlin, London and Rome
        from our operating bases in 🇳🇬 Lagos, 🇺🇸 Austin and 🇩🇪 Berlin.
      </h4>
    </section>

    <section class="section-group">
      <div class="testimonial">
        <div class="container">
          <div class="row align-items-center">
            <?php
              $decagonTestimonials = new WP_Query(array(
                'post_type' => 'testimonial'
              ));
              while($decagonTestimonials->have_posts()){
                $decagonTestimonials->the_post();?>
            <div class="col-lg-5">
              <img
                <?php $image = get_the_post_thumbnail_url();?>
                src="<?php echo esc_url($image)?>"
                alt="<?php echo esc_attr(the_title())?>"
                class="img-fluid"
              />
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <p class="testimonial-text">
                <?php $content = strip_tags(get_the_content());
                 echo $content;?>
              </p>
              <div class="testimonial-author">
                <p class="testimonial-author--name"><?php esc_attr(the_title());?></p>
                <p class="testimonial-author--bio">
                <?php esc_html(the_field('position'));?>
                </p>
              </div>
            </div>
          
            <?php
              }
            ?>
          </div>  
        </div>
      </div>
      <div class="leadership">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>Our Leadership</h2>
            </div>
          </div>
          <div class="leader--grid">
          <?php
            $decagonLeaders = new WP_Query(array(
              'post_type' => 'leaders',
            ));
            while($decagonLeaders->have_posts()){
              $decagonLeaders->the_post();?>
            <div class="leader--card">
              <div class="leader--card__img">
                <img
                  <?php $image = get_the_post_thumbnail_url();?>
                  src="<?php echo esc_url($image)?>"
                  alt="<?php echo esc_attr(the_title())?>"
                  class="img-fluid"
                />
              </div>
              <h3 class="leader--card__name"><?php esc_attr(the_title())?></h3>
              <p class="leader--card__position"><?php esc_html(the_field('position'))?></p>
              <div class="leader--card__qualification">
                <?php esc_html(the_content())?>
              </div>
              <div class="leader--card__linkedin">
                <a
                  href="<?php esc_url(the_field('linkedin_url'))?>"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <img src="<?php echo esc_url(get_theme_file_uri('./assets/img/linkedin.svg'))?>" alt="LinkedIn" />
                  <span>Find on LinkedIn &rarr;</span>
                </a>
              </div>
            </div>
            <?php
            }
          ?>
            
          <button id="toggleLC">See all</button>
        </div>
      </div>
    </section>

    <section class="section-partner-tech">
      <div class="container">
        <div class="our-partners">
          <h5>Our Partnerships</h5>
          <div class="our-partners--images">
          <?php
              $decagonClient = new WP_Query(array(
                'post_type' => 'partners'
              ));
              while($decagonClient->have_posts()){
                $decagonClient->the_post();?>
                <img
                <?php $image = get_the_post_thumbnail_url();?>
                src="<?php echo esc_url($image)?>"
                alt="<?php echo esc_attr(the_title())?>"
                class="img-fluid"
              />
              <?php } ?>
          </div>
        </div>
      </div>
      <div class="our-skills container">
        <h4>Skilled in technologies you need</h4>
        <h6>
          Access a pool of skilled engineers to match your product requirements
        </h6>
        <ul>
            <?php  $decagonSkills = new WP_Query(array(
              'post_type' => 'skills',
              'post_status' => 'publish', 
              'posts_per_page' => -1 
            ));
            while($decagonSkills->have_posts()){
              $decagonSkills->the_post();?>
          <li><?php esc_attr(the_title())?></li>
          <?php 
            }
            ?>
        </ul>
      </div>
    </section>

    <section class="section-media">
      <div class="container">
        <div class="media-heading">
          <h4>News from the HQ</h4>
          <a href="<?php echo site_url('/blog') ?>">Visit Blog</a>
        </div>
        <div class="media-grid">

             <?php 
                $blogPosts = new WP_Query(array(
                  'posts_per_page' => 3,
               ));

                while($blogPosts->have_posts()){
                  $blogPosts->the_post();
                  $blogURL = get_field('blog_url');
                   ?>
                   <div
                    class="news-card"
                    style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url()) ?>)"
                  >
                    <a
                      href="<?php the_permalink(); ?>"
                      class="news-card__overlay"
                    ></a>
                    <div class="news-card__details">
                      <h4> <?php the_title(); ?> </h4>
                      <a
                        href="<?php echo $blogURL; ?>" target="_blank"
                        >Read More</a
                      >
                    </div>
                    
                  </div>
               <?php } 
               wp_reset_postdata(); 
               ?>
        </div>
      </div>
    </section>

<?php
get_footer();
?>