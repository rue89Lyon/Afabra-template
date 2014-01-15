http://www.geekpress.fr/wordpress/guide/personnaliser-page-connexion-732/


    // Fonction qui insere le lien vers le css qui surchargera celui d'origine
    function custom_login_css() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/design/style-login.css" />';
    }
    add_action('login_head', 'custom_login_css');


    body {
    background-image: url(images/body.jpg) !important;
    }
     
    h1 a{
    background: url(images/logo.png) no-repeat !important;
    width: 325px !important;
    height: 93px !important;
    }
     
    #backtoblog {
    background-color: #666;
    box-shadow: 0 1px 3px #666;
    left: 0;
    margin: 0 !important;
    padding: 10px !important;
    position: fixed;
    text-align: left;
    text-shadow: 0 0 0 !important;
    top: 0;
    width: 100%;
    }
     
    .login #backtoblog a {
    color: #FFFFFF !important;
    }


    // Filtre qui permet de changer l'url du logo
    function custom_url_login() {
    return get_bloginfo( 'siteurl' ); // On retourne l'index du site
    }
    add_filter('login_headerurl', 'custom_url_login');


    // Filtre qui permet de changer l'attribut title du logo
    function custom_title_login($message) {
    return get_bloginfo('description'); // On retourne la description du site
    }
    add_filter('login_headertitle', 'custom_title_login');


    // Fonction qui permet d'ajouter du contenu juste au dessus de la balise
    function add_footer_login() {
    echo '<p id="contact">En cas de problème de connexion, veuillez contacter le webmaster au numéro suivant : 00.00.00.00.00 ou par adresse mail : contact@geekpress.fr</p>';
    }
    add_action('login_footer','add_footer_login');


ou par plugin

http://wordpress.org/plugins/custom-login/