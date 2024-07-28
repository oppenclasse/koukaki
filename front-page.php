<?php

get_header();
?>

    <main id="primary" class="site-main">
        <!-- 1er section avec video -->
        <section class="banner">
        <!-- autoplay, la vidéo doit commencer à jouer automatiquement dès qu'elle est prête -->
        <!-- loop, la vidéo doit se relancer automatiquement dès qu'elle atteint la fin. -->
        <!-- playsinline,  non en plein écran sur les appareils mobiles. -->
            <video autoplay muted loop playsinline id="background-video">
                <source src="https://course.oc-static.com/projects/D%C3%A9veloppeur+Web/DWP+IW_P9+Studio+d'animation/Studio+Koukaki-vide%CC%81o+header+sans+son+(1).mp4" type="video/mp4">
            </video>
                <img class=logo src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        </section>  
        <section id="story" class="story">
            <h2><span class="story__titre">L'histoire</sapn></h2>
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
<!-- carrousel -->
            <article id="characters">
                <!-- carrousel -->
                <div class="main-character">
                    <h3>Les personnages</h3>

                <!-- carrousel------------------------------------- -->
                <?php get_template_part( 'carrousel' ); ?>

            </article>
            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2><span class="story__titre">Studio</span><sapn class="story__titre deux">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->

<?php
get_footer(); 
