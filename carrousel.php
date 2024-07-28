<?php
// filename: carrousel.php
?>

<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
  <!-- Swiper -->
        <!-- Swiper Carousel -->
        <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        // Réinitialiser les données des posts pour commencer à partir du début de la requête des personnages
        $characters_query->rewind_posts();
        
        // Boucle sur chaque post dans la requête des personnages
        while ( $characters_query->have_posts() ) {
            $characters_query->the_post();
            
            // Ouvre une nouvelle diapositive Swiper
            echo '<div class="swiper-slide">';
            
            // Affiche la vignette du post avec l'ID actuel, en taille complète, avec un attribut 'alt' égal au titre du post
            echo get_the_post_thumbnail( get_the_ID(), 'full', array('alt' => get_the_title()) );
            
            // Affiche le titre du post dans un élément figcaption
            echo '<figcaption>' . get_the_title() . '</figcaption>';
            
            // Ferme la diapositive Swiper
            echo '</div>';
        }
        ?>
    </div>
</div>
