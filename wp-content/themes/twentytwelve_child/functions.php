<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function load_my_files() { //Créer une fonction pour appeler les fichiers javascript et css
     
    if (!is_admin()) { //Charges les fichiers SAUF sur l'administration du site
   //wp_enqueue_script('jquery'); En general jquery a déjà été chargé plus haut dans le code
//donc pas la peine de le charger 2 fois.
   wp_enqueue_script('js', '/wp-content/themes/twentytwelve_child/js/js.js'); //Load js files
   wp_enqueue_script('tabulous', '/wp-content/themes/twentytwelve_child/js/tabulous.js');

    wp_enqueue_style('tabulous', '/wp-content/themes/twentytwelve_child/tabulous.css'); //Load css files
}
}
add_action('init', 'load_my_files'); // Charge notre fonction qui appelle nos fichiers
//grâce à wp_enqueue_script et wp_enqueue_style

?>