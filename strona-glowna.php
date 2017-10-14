<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <!--zdjęcie główne banner-->
        <div class="row noPadding col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img class="imgHeader"  src="<?php header_image(); ?>"
            height="<?php echo get_custom_header()->height; ?>"
            width="<?php echo get_custom_header()->width; ?>"
            alt=""/>
       </div>

        <div class="row timeOpenBox ">
          <div class="">
      <!-- o firmie-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_aboute ">
              <?php dynamic_sidebar('aboute'); ?>
           </div>
      <!--posty o pracownikach-->
           <div class="noPadding articlePersons col-lg-9 col-md-9 col-sm-12 col-xs-12">
               <?php

               $args = array(
                    'posts_per_page' => 999,
                    'offset' => 0,
                    'cat' => '6',
                    'orderby' => 'ID',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );

                $the_query = new WP_Query( $args );
                    $index = 1;
                    if ( $the_query->have_posts() ) :
                         while ( $the_query->have_posts() ) : $the_query->the_post();
                                echo   '<article class="article col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="article_background ">
                                  <div class="imgContainer">

                                       <img src="' . get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" alt="" />

                                      <span class="article_text">
                                          <h3>' . get_the_title() . '</h3>

                                      </span>

                                  </div>
                                </div>
                            </article>';
                                $index++;
                         endwhile;
                    wp_reset_postdata();
                endif;
               ?>
           </div>
         </div>
        </div>
<!--godziny i mapy-->
      <div class=" row article_box ">
          <div class=" paddingRight col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sidebar_contact ">
      <!--godziny otwarcia-->

                <div class="timeOpen col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php
                  while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'page' );
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                      // comments_template();
                    endif;
                  endwhile; // End of the loop.
                  ?>
                </div>
      <!--mapa-->
                <div class="sidebar_contact  mapBox col-lg-5 col-md-5 col-sm-5 col-xs-12">
                		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.5114194664297!2d4.83986651610137!3d52.28857147977109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e02359790171%3A0x9da5dade12323784!2sBinderij+3P%2C+1185+ZH+Amstelveen%2C+Holandia!5e0!3m2!1spl!2spl!4v1506172580454" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
      <!--adress-->
              <div class="sidebar_contact widget_text_adres col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="borderLeft">

               <?php dynamic_sidebar('contact'); ?>
               <p class="button_homepage">
                <a href="/wordpress/kontakt/">Skontaktuj&nbsp;się&nbsp;+&nbsp;</a>
               </p>
               </div>
             </div>
          </div>
      </div>





                    <!--article_border-->
                    <!-- <div class="border_bottom">
                        <p class="border"> </p>
                        <p class="border_text">
                            AKTUALNOŚCI
                        </p>
                    </div> -->
                    <!-- /article_border-->
                    <!--article_box-->



        <!-- /article-->
    </main>
    <!-- .site-main -->
</div>
<!-- .content-area -->



    <?php get_footer(); ?>
