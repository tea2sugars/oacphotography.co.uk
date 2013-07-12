<?php
/**
 * Twenty Eleven functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 584;

/**
 * Tell WordPress to run twentyeleven_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'twentyeleven_setup' );

if ( ! function_exists( 'twentyeleven_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyeleven_setup() in a child theme, add your own twentyeleven_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 * 	and backgrounds, and post formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_setup() {

	/* Make Twenty Eleven available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Eleven, use a find and replace
	 * to change 'twentyeleven' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyeleven', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load up our theme options page and related code.
	require( get_template_directory() . '/inc/theme-options.php' );

	// Grab Twenty Eleven's Ephemera widget.
	require( get_template_directory() . '/inc/widgets.php' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

	$theme_options = twentyeleven_get_theme_options();
	if ( 'dark' == $theme_options['color_scheme'] )
		$default_background_color = '1d1d1d';
	else
		$default_background_color = 'e2e2e2';

	// Add support for custom backgrounds.
	add_theme_support( 'custom-background', array(
		// Let WordPress know what our default background color is.
		// This is dependent on our current color scheme.
		'default-color' => $default_background_color,
	) );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );

	// Add support for custom headers.
	$custom_header_support = array(
		// The default header text color.
		'default-text-color' => '000',
		// The height and width of our custom header.
		'width' => apply_filters( 'twentyeleven_header_image_width', 1000 ),
		'height' => apply_filters( 'twentyeleven_header_image_height', 288 ),
		// Support flexible heights.
		'flex-height' => true,
		// Random image rotation by default.
		'random-default' => true,
		// Callback for styling the header.
		'wp-head-callback' => 'twentyeleven_header_style',
		// Callback for styling the header preview in the admin.
		'admin-head-callback' => 'twentyeleven_admin_header_style',
		// Callback used to display the header preview in the admin.
		'admin-preview-callback' => 'twentyeleven_admin_header_image',
	);

	add_theme_support( 'custom-header', $custom_header_support );

	if ( ! function_exists( 'get_custom_header' ) ) {
		// This is all for compatibility with versions of WordPress prior to 3.4.
		define( 'HEADER_TEXTCOLOR', $custom_header_support['default-text-color'] );
		define( 'HEADER_IMAGE', '' );
		define( 'HEADER_IMAGE_WIDTH', $custom_header_support['width'] );
		define( 'HEADER_IMAGE_HEIGHT', $custom_header_support['height'] );
		add_custom_image_header( $custom_header_support['wp-head-callback'], $custom_header_support['admin-head-callback'], $custom_header_support['admin-preview-callback'] );
		add_custom_background();
	}

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be the size of the header image that we just defined
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( $custom_header_support['width'], $custom_header_support['height'], true );

	// Add Twenty Eleven's custom image sizes.
	// Used for large feature (header) images.
	add_image_size( 'large-feature', $custom_header_support['width'], $custom_header_support['height'], true );
	// Used for featured posts if a large-feature doesn't exist.
	add_image_size( 'small-feature', 500, 300 );

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'wheel' => array(
			'url' => '%s/images/headers/wheel.jpg',
			'thumbnail_url' => '%s/images/headers/wheel-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Wheel', 'twentyeleven' )
		),
		'shore' => array(
			'url' => '%s/images/headers/shore.jpg',
			'thumbnail_url' => '%s/images/headers/shore-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Shore', 'twentyeleven' )
		),
		'trolley' => array(
			'url' => '%s/images/headers/trolley.jpg',
			'thumbnail_url' => '%s/images/headers/trolley-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Trolley', 'twentyeleven' )
		),
		'pine-cone' => array(
			'url' => '%s/images/headers/pine-cone.jpg',
			'thumbnail_url' => '%s/images/headers/pine-cone-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Pine Cone', 'twentyeleven' )
		),
		'chessboard' => array(
			'url' => '%s/images/headers/chessboard.jpg',
			'thumbnail_url' => '%s/images/headers/chessboard-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Chessboard', 'twentyeleven' )
		),
		'lanterns' => array(
			'url' => '%s/images/headers/lanterns.jpg',
			'thumbnail_url' => '%s/images/headers/lanterns-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Lanterns', 'twentyeleven' )
		),
		'willow' => array(
			'url' => '%s/images/headers/willow.jpg',
			'thumbnail_url' => '%s/images/headers/willow-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Willow', 'twentyeleven' )
		),
		'hanoi' => array(
			'url' => '%s/images/headers/hanoi.jpg',
			'thumbnail_url' => '%s/images/headers/hanoi-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Hanoi Plant', 'twentyeleven' )
		)
	) );
}
endif; // twentyeleven_setup

if ( ! function_exists( 'twentyeleven_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_header_style() {
	$text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( $text_color == HEADER_TEXTCOLOR )
		return;

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $text_color ) :
	?>
		#site-title,
		#site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo $text_color; ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // twentyeleven_header_style

if ( ! function_exists( 'twentyeleven_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_admin_header_style() {
?>
	<style type="text/css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}
	#headimg h1 {
		margin: 0;
	}
	#headimg h1 a {
		font-size: 32px;
		line-height: 36px;
		text-decoration: none;
	}
	#desc {
		font-size: 14px;
		line-height: 23px;
		padding: 0 0 3em;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?>;
		}
	<?php endif; ?>
	#headimg img {
		max-width: 1000px;
		height: auto;
		width: 100%;
	}
	</style>
<?php
}
endif; // twentyeleven_admin_header_style

if ( ! function_exists( 'twentyeleven_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_admin_header_image() { ?>
	<div id="headimg">
		<?php
		$color = get_header_textcolor();
		$image = get_header_image();
		if ( $color && $color != 'blank' )
			$style = ' style="color:#' . $color . '"';
		else
			$style = ' style="display:none"';
		?>
		<h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }
endif; // twentyeleven_admin_header_image

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function twentyeleven_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );

if ( ! function_exists( 'twentyeleven_continue_reading_link' ) ) :
/**
 * Returns a "Continue Reading" link for excerpts
 */
function twentyeleven_continue_reading_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) . '</a>';
}
endif; // twentyeleven_continue_reading_link

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyeleven_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function twentyeleven_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyeleven_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function twentyeleven_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= twentyeleven_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function twentyeleven_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );

/**
 * Register our sidebars and widgetized areas. Also register the default Epherma widget.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_widgets_init() {

	register_widget( 'Twenty_Eleven_Ephemera_Widget' );

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Showcase Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-2',
		'description' => __( 'The sidebar for the optional Showcase Template', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area One', 'twentyeleven' ),
		'id' => 'sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Two', 'twentyeleven' ),
		'id' => 'sidebar-4',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Three', 'twentyeleven' ),
		'id' => 'sidebar-5',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentyeleven_widgets_init' );

if ( ! function_exists( 'twentyeleven_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function twentyeleven_content_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // twentyeleven_content_nav

/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function twentyeleven_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;

	return esc_url_raw( $matches[1] );
}

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 */
function twentyeleven_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}

	if ( $class )
		echo 'class="' . $class . '"';
}

if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()

if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_body_classes( $classes ) {

	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}
add_filter( 'body_class', 'twentyeleven_body_classes' );


/************************FAQS --------------custom type*******/
add_action( 'init', 'create_post_type_custom_faq' );
function create_post_type_custom_faq() {
	register_post_type( 'custom_faqs',
		array(
			'labels' => array(
	'name' => __( 'FAQS' ),
	'singular_name' => __( 'Faq' ),
	'add_new' => __( 'Add Faq' ),
	'add_new_item' => __( 'Add New Faq' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Faq' ),
	'new_item' => __( 'New Faq' ),
	'view' => __( 'View Faq' ),
	'view_item' => __( 'View Faq' ),
	'search_items' => __( 'Faq' ),
	'not_found' => __( 'No Faqs found' ),
	'not_found_in_trash' => __( 'No Faqs found in Trash' ),
	'parent' => __( 'Parent Faq' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

if($_REQUEST[action]=='get_about_pages'){
add_action('init', 'my_action_get_pages_about');
}

function my_action_get_pages_about(){

?>
<!--<script>
jQuery(document).ready(function(){
jQuery('.about_pan a').click(function(){
post = jQuery(this).attr('title');
var path = '<?php echo site_url() ?>';
ajaxurl= path+'/wp-admin/admin-ajax.php';
	var data = {		
                action: 'get_about_content',
                post_id :post	
                               
	};
	// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
jQuery.post(ajaxurl, data, function(response) {
	response=response.substring(0,response.length - 1);
jQuery('#desc').html(response);
jQuery('#lightbox-overlay').show();
jQuery('#lightbox-overlay-text').hide();
loadPopupBox();
function loadPopupBox() {	// To Load the Popupbox
			jQuery('#popup_box').fadeIn("slow");
			jQuery("#container").css({ // this is just for style
				"opacity": "0.3"  
			}); 		
		}
jQuery('#popupBoxClose').click( function() {			
			unloadPopupBox();
jQuery('#lightbox-overlay').hide();
		});
function unloadPopupBox() {	// TO Unload the Popupbox
			jQuery('#popup_box').fadeOut("slow");
			jQuery("#container").css({ // this is just for style		
				"opacity": "1"  
			}); 
		}
});
});
});
</script>-->
<?php $parent = $_POST['id'];
$args=array(
  'child_of' => $parent,
  'sort_column' => 'menu_order',
  'sort_order' => 'asc'  
);
$pages = get_pages($args);
$i = 1 ; 
foreach($pages as $page){
if($i == 1){
?>

<div class="six column about_pan_left" style="width:40%;">
    <?php  //$image=wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
            ?>
<?php  
$meta = get_post_meta($page->ID);
$image = wp_get_attachment_url($meta['photo_upload'][0], 'full');
?>
                <div class="owen"><a href="javascript:void(0);" class="toolti3" title="<?php echo $page->ID;?>"><img src="<?php echo $image; ?>" alt="<?php the_title();?>"/></a></div>
	<h1><?php //echo $page->post_title;?></h1>
      <!--<a href="javascript:void(0);" class="toolti3" title="<?php echo $page->ID;?>"><img src="<?php //echo $image[0];?>" width="480" height="358" /><span><?php //echo $page->post_content;?></span></a>-->
   </div>
<div class="celltitle abt-title"style="float:left;width:19%;margin-top:65px;"><h1 style="padding:0px;margin:0px;">ABOUT<br/><hr style="margin:0px;padding:0px;background:#7c7c7c;height:3px;">US</h1>
<div class="social" style="margin-left:40px">
<a class="face" href="#"></a>
<a class="print" href="#"></a>
<a class="twit" href="#"></a>
</div>

</div>
 <!-- <div class="six column about_pan_right">
       <h1><?php //echo $page->post_title;?></h1>
       <a href="javascript:void(0);" class="toolti3" title="<?php //echo $page->ID;?>"><!--<p><?php //echo $page->post_title;?></p>
        <span><?php //echo $page->post_content;?></span>
      </a>
   </div>-->
<?php }else{?>
<!--<div class="six column about_pan_right bg_color">
     <h1><?php //echo $page->post_title;?></h1>
     <a href="javascript:void(0);" class="toolti3" title="<?php //echo $page->ID;?>"><!--<p><?php //echo $page->post_title;?></p>
        <span><?php //echo $page->post_content;?></span>
      </a>
   </div>-->
   <div class="six column about_pan_left" style="width:40%;">
       <?php  
$meta = get_post_meta($page->ID);
$image = wp_get_attachment_url($meta['photo_upload'][0], 'full');
?>
<div class="owen1"><a href="javascript:void(0);" class="toolti3" title="<?php echo $page->ID;?>"><img src="<?php echo $image; ?>" alt="<?php the_title();?>"/></a></div>
       <?php  //$image=wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
            ?>
<h1><?php //echo $page->post_title;?></h1>
      <!--<a href="javascript:void(0);" class="toolti3" title="<?php echo $page->ID;?>"><img src="<?php echo $image[0];?>" width="480" height="358" /></a> -->
   </div>
<?php }
$i++;
}
}


if($_REQUEST[action]=='get_about_content'){
add_action('init', 'my_action_get_about_content');
}

function my_action_get_about_content(){

$post = get_post( $_POST['post_id']); 

?>
<?php if($_POST['post_id'] == 66) : ?>
    <div class="six column about_pan_left">
         <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<img src="<?php echo $feat_image;?>" width="480"  />
    </div>
    <div class="six column about_pan_right">
	<h1><?php echo $post->post_title;?></h1>
	<?php echo $post->post_content;?>
    </div>
<?php elseif ($_POST['post_id'] == 63) : ?>
    <div class="six column about_pan_right bg_color">
	<h1><?php echo $post->post_title;?></h1>
	<?php echo $post->post_content;?>
    </div>
    <div class="six column about_pan_left">
        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<img width="480" src="<?php echo $feat_image;?>"> 
    </div>
<?php endif; ?>
<?php }


/* Gallery Management post type */
add_action( 'init', 'create_post_type_blog_manage' );
function create_post_type_blog_manage() {
	register_post_type( 'blog_manage',
		array(
			'labels' => array(
	'name' => __( 'Blog Management' ),
	'singular_name' => __( 'Blogs' ),
	'add_new' => __( 'Add Blog' ),
	'add_new_item' => __( 'Add New Blog' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Blog' ),
	'new_item' => __( 'New Blog' ),
	'view' => __( 'View Blog' ),
	'view_item' => __( 'View Blog' ),
	'search_items' => __( 'Blog' ),
	'not_found' => __( 'No Blogs found' ),
	'not_found_in_trash' => __( 'No Blogs found in Trash' ),
	'parent' => __( 'Parent Blog' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}
/*end */

add_action( 'init', 'create_post_type_how_we_work' );
function create_post_type_how_we_work() {
	register_post_type( 'how_we_work',
		array(
			'labels' => array(
	'name' => __( 'how we work' ),
	'singular_name' => __( 'how we work' ),
	'add_new' => __( 'Add how we work' ),
	'add_new_item' => __( 'Add New how we work' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit how we work' ),
	'new_item' => __( 'New how we work' ),
	'view' => __( 'View how we work' ),
	'view_item' => __( 'View how we work' ),
	'search_items' => __( 'how we work' ),
	'not_found' => __( 'No how we work found' ),
	'not_found_in_trash' => __( 'No how we work found in Trash' ),
	'parent' => __( 'Parent how we work' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}
/**Price**********/
add_action( 'init', 'create_post_type_price' );
function create_post_type_price() {
	register_post_type( 'price',
		array(
			'labels' => array(
	'name' => __( 'price' ),
	'singular_name' => __( 'price' ),
	'add_new' => __( 'Add price' ),
	'add_new_item' => __( 'Add New price' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit price' ),
	'new_item' => __( 'New price' ),
	'view' => __( 'View price' ),
	'view_item' => __( 'View price' ),
	'search_items' => __( 'price' ),
	'not_found' => __( 'No price found' ),
	'not_found_in_trash' => __( 'No price found in Trash' ),
	'parent' => __( 'Parent price' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**Amigos**********/
add_action( 'init', 'create_post_type_amigos' );
function create_post_type_amigos() {
	register_post_type( 'amigos',
		array(
			'labels' => array(
	'name' => __( 'amigos' ),
	'singular_name' => __( 'amigos' ),
	'add_new' => __( 'Add amigos' ),
	'add_new_item' => __( 'Add New amigos' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit amigos' ),
	'new_item' => __( 'New amigos' ),
	'view' => __( 'View amigos' ),
	'view_item' => __( 'View amigos' ),
	'search_items' => __( 'amigos' ),
	'not_found' => __( 'No amigos found' ),
	'not_found_in_trash' => __( 'No amigos found in Trash' ),
	'parent' => __( 'Parent amigos' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**Corporate-content**********/
add_action( 'init', 'create_post_type_corporate_content' );
function create_post_type_corporate_content() {
	register_post_type( 'corporate_content',
		array(
			'labels' => array(
	'name' => __( 'Corporate content' ),
	'singular_name' => __( 'corporate content' ),
	'add_new' => __( 'Add corporate content' ),
	'add_new_item' => __( 'Add New corporate content' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit corporate_content' ),
	'new_item' => __( 'New corporate_content' ),
	'view' => __( 'View corporate_content' ),
	'view_item' => __( 'View corporate_content' ),
	'search_items' => __( 'corporate_content' ),
	'not_found' => __( 'No corporate_content found' ),
	'not_found_in_trash' => __( 'No corporate_content found in Trash' ),
	'parent' => __( 'Parent corporate_content' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**Corporate-slider**********/
add_action( 'init', 'create_post_type_corporate_slider' );
function create_post_type_corporate_slider() {
	register_post_type( 'corporate_slider',
		array(
			'labels' => array(
	'name' => __( 'Corporate slider' ),
	'singular_name' => __( 'corporate slider' ),
	'add_new' => __( 'Add corporate slider' ),
	'add_new_item' => __( 'Add New corporate slider' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit corporate_slider' ),
	'new_item' => __( 'New corporate_slider' ),
	'view' => __( 'View corporate_slider' ),
	'view_item' => __( 'View corporate_slider' ),
	'search_items' => __( 'corporate_slider' ),
	'not_found' => __( 'No corporate_slider found' ),
	'not_found_in_trash' => __( 'No corporate_slider found in Trash' ),
	'parent' => __( 'Parent corporate_slider' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**Corporate-Gallery**********/
add_action( 'init', 'create_post_type_corporate_gallery' );
function create_post_type_corporate_gallery() {
	register_post_type( 'corporate_gallery',
		array(
			'labels' => array(
	'name' => __( 'Corporate gallery' ),
	'singular_name' => __( 'corporate gallery' ),
	'add_new' => __( 'Add corporate gallery' ),
	'add_new_item' => __( 'Add New corporate gallery' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit corporate_gallery' ),
	'new_item' => __( 'New corporate_gallery' ),
	'view' => __( 'View corporate_gallery' ),
	'view_item' => __( 'View corporate_gallery' ),
	'search_items' => __( 'corporate_gallery' ),
	'not_found' => __( 'No corporate_gallery found' ),
	'not_found_in_trash' => __( 'No corporate_gallery found in Trash' ),
	'parent' => __( 'Parent corporate_gallery' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**Portrait-slider**********/
add_action( 'init', 'create_post_type_portrait_slider' );
function create_post_type_portrait_slider() {
	register_post_type( 'portrait_slider',
		array(
			'labels' => array(
	'name' => __( 'portrait slider' ),
	'singular_name' => __( 'portrait slider' ),
	'add_new' => __( 'Add portrait slider' ),
	'add_new_item' => __( 'Add New portrait slider' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit portrait_slider' ),
	'new_item' => __( 'New portrait_slider' ),
	'view' => __( 'View portrait_slider' ),
	'view_item' => __( 'View portrait_slider' ),
	'search_items' => __( 'portrait_slider' ),
	'not_found' => __( 'No portrait_slider found' ),
	'not_found_in_trash' => __( 'No portrait_slider found in Trash' ),
	'parent' => __( 'Parent portrait_slider' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**portrait-Gallery**********/
add_action( 'init', 'create_post_type_portrait_gallery' );
function create_post_type_portrait_gallery() {
	register_post_type( 'portrait_gallery',
		array(
			'labels' => array(
	'name' => __( 'portrait gallery' ),
	'singular_name' => __( 'portrait gallery' ),
	'add_new' => __( 'Add portrait gallery' ),
	'add_new_item' => __( 'Add New portrait gallery' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit portrait_gallery' ),
	'new_item' => __( 'New portrait_gallery' ),
	'view' => __( 'View portrait_gallery' ),
	'view_item' => __( 'View portrait_gallery' ),
	'search_items' => __( 'portrait_gallery' ),
	'not_found' => __( 'No portrait_gallery found' ),
	'not_found_in_trash' => __( 'No portrait_gallery found in Trash' ),
	'parent' => __( 'Parent portrait_gallery' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

/**Portrait-content**********/
add_action( 'init', 'create_post_type_portrait_content' );
function create_post_type_portrait_content() {
	register_post_type( 'portrait_content',
		array(
			'labels' => array(
	'name' => __( 'portrait content' ),
	'singular_name' => __( 'portrait content' ),
	'add_new' => __( 'Add portrait content' ),
	'add_new_item' => __( 'Add New portrait content' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit portrait_content' ),
	'new_item' => __( 'New portrait_content' ),
	'view' => __( 'View portrait_content' ),
	'view_item' => __( 'View portrait_content' ),
	'search_items' => __( 'portrait_content' ),
	'not_found' => __( 'No portrait_content found' ),
	'not_found_in_trash' => __( 'No portrait_content found in Trash' ),
	'parent' => __( 'Parent portrait_content' ),
),
	'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
	'public' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
		'supports' => array( 'title', 'thumbnail', 'excerpt')
		)
	);
}

