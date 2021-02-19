<?php

    get_header();
?>
    <div class="container">
            <div class="intro-content">
                <h1 class="w_color">
                <span> <?php the_archive_title() ;?></span>
                </h1>
            </div>
            </div>
    </header>
<?php
    while(have_posts()){
        the_post();?>

    <section class="single-service" id="software-development">
          <div class="container">
            <div class="row pt_xl wow fadeInUp animated" style="visibility: visible;">
            <div class="col-lg-3">
                <div class="heading mb_small">
                  <?php the_post_thumbnail(); ?>

                </div>
              </div>
              <div class="offset-lg-1 col-lg-8 brands alt d-flex align-items-center">
                <div class="heading mb_small">
                  <h6 class="smaller"> <?php the_title()?></h6>
                  <div><?php the_content() ?></div>
                  <a href="<?php the_permalink() ?>">Read more</a>
                  </div>
                <div class="row">
                </div>
              </div>
              
            </div>
          </div>
        </section>

<?php } ?>
<section class="single-service" id="software-development">
   <div class="container">
<?php
    echo paginate_links();
?>
  </div> 
</section>
<?php
    get_footer();
