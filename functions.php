<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		} );
	return;
}

class BethelSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
        add_action( 'init', array( $this, 'register_bethel_menus' ) );
		parent::__construct();
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

    function register_bethel_menus() {
        register_nav_menus(
            array(
                'primary' => __( 'Bethel Header Menu', 'bethel-header-menu' ),
                'sidebar' => __( 'Bethel Sidebar Menu', 'bethel-sidebar-menu' ),
            )
        );
    }

	function add_to_context( $context ) {
        $context['current_url'] = TimberHelper::get_current_url();
        $context['pagination'] = Timber::get_pagination();
		$context['bethel_header_menu'] = new TimberMenu('primary');
        $context['bethel_sidebar_menu'] = new TimberMenu('sidebar');
		$context['site'] = $this;
		return $context;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter( 'myfoo', new Twig_Filter_Function( 'myfoo' ) );
		return $twig;
	}

}

new BethelSite();

// include('macros.php');
// The navListItem function created for Cascade assumes that a relative path will suffice
// since blogs is on a subdomain, we need to modify this function to create a full path URL
function navListItem($pageStartsWith, $test_starts_with, $path, $label, $classes='', $baseUrl='//www.bethel.edu'){
    if(!strpos($path, ':')) {
        $path = $baseUrl . $path;
    }
    echo '<li>';
    if($classes){
        if($pageStartsWith == $test_starts_with){
            echo "<a class='$classes active' href='$path'>$label</a>";
        }else{
            echo "<a class='$classes' href='$path'>$label</a>";
        }
    }else{
        if($pageStartsWith == $test_starts_with){
            echo "<a class='active' href='$path'>$label</a>";
        }else{
            echo "<a href='$path'>$label</a>";
        }
    }
    echo '</li>';
}

function create_bethel_head() {
    include('views/head.php');
}

function create_bethel_body_start() {
    include('views/body-start.php');
}

function create_bethel_toolbox() {
    include('views/toolbox.php');
}

function create_bethel_global_header() {
    include('views/global-header.php');
}

function create_bethel_footer() {
    include('views/footer.php');
}

function create_bethel_body_end() {
    include('views/body-end.php');
}