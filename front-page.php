<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner parallax">
        <div class="parallax__image">
            <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/photo/logo.png" alt="logo">
        </div>
        <video autoplay loop muted id="idvideo" class="parallax__video"
            poster="<?php echo get_stylesheet_directory_uri(); ?>/photo/Studio Koukaki-image header 1.png">
            <source type="video/mp4"
                src="<?php echo get_stylesheet_directory_uri(); ?>/video/Studio+Koukaki-vidéo+header+sans+son.mp4" />
        </video>
    </section>

    <!-- Section 1 -->
    <section id="#story" class="story section-fade-in">
        <h2 class="fondviolet">
            <div class="floating">
                <span class="animH2">L'histoire</span>
            </div>
        </h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
    </section>

    <!-- SECTION 2 -->
    <section class="section-fade-in">
        <article id="characters">
            <div class="main-character">
                <h3 class="fondorange">
                    <div class="floating">
                        <span class="animH3 floating">Les personnages</span>
                    </div>
                </h3>


                <br>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-slide"
                                src="<?php echo get_site_url() . '/wp-content/uploads/2022/06/Kawaneko.png'; ?>"
                                alt="chat" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-slide"
                                src="<?php echo get_site_url() . '/wp-content/uploads/2022/06/Orenjiiro-1.png'; ?>"
                                alt="chat" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-slide"
                                src="<?php echo get_site_url() . '/wp-content/uploads/2022/06/Pinku-1.png'; ?>"
                                alt="chat" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-slide"
                                src="<?php echo get_site_url() . '/wp-content/uploads/2022/06/Tenshi-1.png'; ?>"
                                alt="chat" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-slide"
                                src="<?php echo get_site_url() . '/wp-content/uploads/2022/06/Jaakuna-1.png'; ?>"
                                alt="chat" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </article>
    </section>

    <!-- SECTION 3 -->
    <section class="section-fade-in story">
        <article id="place">
            <div>
                <h3 class="fondorange2">
                    <div class="floating">
                        <span class="animH33 floating">Le Lieu</span>
                    </div>
                </h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="boitenuages">
                <div class="nuagede"> </div>
                <div class="nuageun"></div>
            </div>
            </div>

        </article>
    </section>


    <!-- SECTION 4 -->
    <section id="studio" class="section-fade-in">
        <h2 class="fondviolet2">
            <div class="floating">
                <span class="animH22">Studio Koukaki</span>
            </div>
        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
        <img class="fleureblanche" src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Sunflower.png" alt="fleure">
        <h3 class="fondorange3">
            <div class="floating">
                <span class="animH333">Fleurs d’oranger & chats errants <br> est nominé aux Oscars Short <br> Film
                    Animated de 2022 ! </span>
            </div>
        </h3>
        <img class="oscar" src="<?php echo get_stylesheet_directory_uri(); ?>/photo/oscarsfa.png" alt="logooscar">
    </section>
</main><!-- #main -->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<?php
get_footer();