<?php
get_header();

while(have_posts()){
    the_post();?>

    <div class="container">
          <div class="intro-content">
          <?php 
              $title=get_the_title();
              $split_title = explode(" ",$title);
              $last_element = array_pop($split_title);
              ?> 
            <h1 class="w_color">
              <?php print_r(implode(" ",$split_title));?><span> <?php print_r($last_element);?>.</span>
            </h1>
          </div>
        </div>
   </header>

   <section class="single-service" id="software-development">
          <div class="container">
            <div class="row pt_xl wow fadeInUp animated" style="visibility: visible;">
              <div class="col-lg-3">
                <div class="heading mb_small">
                  
                    <?php $custom_field = get_field("table_of_content");
                    $custom_field = str_replace( ', ', ',', $custom_field );

                    //Convert the string to array using the comma as the delimiter
                    $items = explode( ',' , $custom_field );
                    //Print the unordered list
                    echo '<ul>';
                    foreach ( $items as $item ) :
                        echo "<li>$item</li>";
                    endforeach;
                    echo '</ul>';
                    ?>
                </div>
              </div>
              <div class="offset-lg-1 col-lg-8 brands alt d-flex align-items-center">
                <div class="heading mb_small">
                  <h6 class="smaller">DECAGON <?php the_title()?></h6>
                  <div><?php the_content() ?></div>
                  </div>
                <div class="row">
                </div>
              </div>
            </div>
          </div>
        </section>
<?php
}

get_footer();

?>