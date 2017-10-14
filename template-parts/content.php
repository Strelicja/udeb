
<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Udeb
 */

?>
    <div class="container-fluid overflow main_width colorWhite">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="row">
                <p class="article_title_main ">
                    Aktualności
                </p>
                <div class="article_imgs ">
                    <a class="article_img_main" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_the_permalink() ?>" target="_blank"></a>
                    <a class="article_img_main_2" href="https://twitter.com/home?status=<?php get_the_permalink() ?>" target="_blank"></a>
                </div>
            </div>

            <div class="actual" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>);"></div>

            <div class="col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12 ">
                <p class="actualTextSmall">
                    <?php echo the_post_thumbnail_caption(); ?>
                </p>
                <h1 class="actualTextTitle">
                    <?php echo the_title(); ?>
                </h1>
                <p class="actualText">
                    <?php echo the_field('opis_wpisu'); ?>
                </p>
                <p class="actualTextLarge">
                    <?php echo wp_trim_words(get_the_content(), 20, '')  ?>
                </p>
            </div>
            <!-- .entry-content -->
        </div>
    </div>

    <div class="container">
        <div class="row color">
            <div>
                <!--article_title-->
                <div class="">
                    <p class="article_title">Inne aktualności</p>
                </div>
                <!-- /article_title-->
                <!--article_box-->
                <div class=" row article_box ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php


                            $args = array(
                                 'posts_per_page' => 3,
                                 'offset' => 0,
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
                                             echo   '<article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article"><div class="article_background">     <div>
                                                 <a href="' . get_the_permalink() . '"><img src="' . get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" alt="" /></a>
                                                 <div class="article_text">
                                                     <p class="article_date">AKTUALNOŚCI | ' . get_the_date( 'd.m.Y' ) . '</p>
                                                     <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                                                     <p class="article_border"><a href="' . get_the_permalink() . '">' . get_post_meta(get_the_ID(), 'opis_wpisu', true) . '</a></p>
                                                 </div>
                                                 </div>
                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                     <p><a class="button" href="' . get_the_permalink() . '">WIĘCEJ &#8250;</a> </p>
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

                <div class=" row article_box ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="border_bottom_wiecej">
                        <p class="border_wiecej"> </p>
                        <p class="border_text_wiecej">
                          <a class="button" href="' .get_the_permalink() . '">WIĘCEJ</a>
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
