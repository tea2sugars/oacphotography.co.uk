<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<footer class="in-footer">
<div class="foter_left in-foter_left"><h2><?php echo get_option_tree( 'footer_text' );?></h2>
<p class="ft-email">email <a href="mailto:<?php echo get_option_tree( 'footer_email' );?>"><?php echo get_option_tree( 'footer_email' );?></a></p>
<p>call <span><?php echo get_option_tree( 'footer_phone' );?></span></p>
<div class="follw inner-follow">
<p>follow us</p>
<ul>
<li><a href="<?php echo get_option_tree( 'facebook' );?>">like us!</a></li>
<li><a href="<?php echo get_option_tree( 'charis_tweet' );?>" class="in-tw_icn">charis' tweets</a></li>
<li><a href="<?php echo get_option_tree( 'owen_tweet' );?>" class="in-tw_icn">owen's tweets</a></li>
</ul>
</div>

</div>
<div class="foter_right in-foter_right"><h2>our site</h2>
 <?php wp_nav_menu(array('theme_location' => 'Left_navigation', 'menu' => 'Left_navigation')); ?>
 <?php wp_nav_menu(array('theme_location' => 'Footer_right', 'menu' => 'Footer_right')); ?>
<div class="clear"></div>
<p><span>&copy;</span><?php echo get_option_tree( 'footer_copy' );?></p>

</div>
<div class="clear"></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>