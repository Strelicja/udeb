<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package udeb_pazdziernik
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid overflow main_width colorWhite">
                <!--article-->
                <div class="row">
                    <div class="blad_site–img visible-lg">
                    </div>
                    <div class="blad_site col-lg-offset-3 col-lg-6  col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-11">
                        <h1>Błąd 404</h1>
                        <div class="blad_site_text">
                            <p>
                                Strona o podanym adresie nie istnieje. Prawdopodobnie został wprowadzony nieistniejący lub błędny adres poszukiwanej strony.
                            </p>

                            <div class="blad_site_text_small">
                                <p>
                                    W celu odnalezienia poszukiwanej informacji:
                                </p>
                                <p class="blad_link">
                                    <a href="/?s=">skorzystaj z wyszukiwarki</a>
                                </p>
<!--
                                <p class="blad_link">
                                    <a href="#">zobacz mapę serwicu</a>
                                </p>
-->
                                <p class="blad_link">
                                    <a href="/">wróć do strony głównej</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--article-->
            </div>
        </main>

    </div>
    <!-- .content-area -->
    <?php get_footer(); ?>
