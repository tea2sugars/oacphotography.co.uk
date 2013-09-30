<article class="nav_border" id="she_and_him" style="height:0px;"></article>
<!-- EOF of NAV BORDER PAN -->

<!-- SOF OF ABOUT PAN -->
<?php 
?>
<section class="about_pan" id="about" style="min-height:670px;">
<div id='mySwipe' style='max-width:100%;margin:0 auto' class='swipe'>
  <div class='swipe-wrap'>
    <div><b>
	<?php 
	$page_data = get_page('66');
	$meta = get_post_meta('66');
    $image1 = wp_get_attachment_url($meta['photo_upload'][0], 'full');
	?>	
	<div style="width:32%; margin-top:40px;"><img src="<?php echo $image1; ?>" alt="<?php the_title();?>"/></div>	
	<div style="width:68%;height:550px;" class="owen_swipe" onclick='mySwipe.next()'><h1><?php echo $page_data->post_title;?></h1><?php echo $page_data->post_content;?> <br/>
	<div class="social" style="margin-left:22px">
		<!--<a href="<?php echo get_option_tree( 'facebook' );?>" class="face" target="_blank"></a>-->
		<a href="<?php echo get_option_tree( 'pin_owen' );?>" class="print" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'owen_tweet' );?>" class="twit" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'insta_owen' );?>" class="insta" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'owen_vsco' );?>" class="vsco" target="_blank"></a>
    </div>
	</div>
	<span style="float:right;"><a href="javascript::void(0);" onclick="mySwipe.next()">Next</a></span>
	</b></div>
    <div><b>
	
	<section id="about">

     <div style="width:40%; margin-top:20px;" class="six column about_pan_left">
                    <div class="owen"><a title="66" class="toolti3" href="javascript::void(0);" onclick='mySwipe.prev()'><img alt="" src="<?php echo $image1;?>"></a></div>
	<h1></h1>    
    </div>
		<div style="float:left;width:19%;margin-top:20%;" class="celltitle abt-title"><h1 style="padding:0px;margin:0px;">ABOUT<br><hr style="margin:0px;padding:0px;background:#7c7c7c;height:3px;">US</h1>
		<div style="margin-left:55px;" class="social">
		<a href="<?php echo get_option_tree( 'facebook' );?>" class="face" target="_blank"></a>
		<!--<a href="<?php echo get_option_tree( 'pintrest' );?>" class="print" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'twitter' );?>" class="twit" target="_blank"></a>-->
		<a href="<?php echo get_option_tree( 'google_plus' );?>" class="google" target="_blank"></a>
		</div>
   </div> 
   <?php 
	$page_data = get_page('63');
	$meta = get_post_meta('63');
    $image2 = wp_get_attachment_url($meta['photo_upload'][0], 'full');
	?>
   <div style="width:40%; margin-top:45px;" class="six column about_pan_left">
       <div class="owen1" style="float:right;"><a title="63" class="toolti3" href="javascript::void(0);" onclick='mySwipe.next()'><img alt="" src="<?php echo $image2;?>"></a></div>
       <h1></h1>      
   </div>
</section>	
	</b></div>
    <div><b>	
	<div style="width:68%;height:585px;" onclick='mySwipe.prev()' class="charis_swipe"><h1><?php echo $page_data->post_title;?></h1><?php echo $page_data->post_content;?>
	<div class="social" style="margin-left:19px">
		<!--<a href="<?php echo get_option_tree( 'facebook' );?>" class="face" target="_blank"></a>-->
		<a href="<?php echo get_option_tree( 'pin_charis' );?>" class="print" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'charis_tweet' );?>" class="twit" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'insta_charis' );?>" class="insta" target="_blank"></a>
		<a href="<?php echo get_option_tree( 'charis_vsco' );?>" class="vsco" target="_blank"></a>
    </div>
	</div>	
	<div style="width:32%; margin-top:40px;"><img src="<?php echo $image2; ?>" alt="<?php the_title();?>"/></div>	
	</b><div class="clear"></div>
	<span style="float:left;margin-left:21px;"><a style="font-size: 18px;font-weight: bold;" href="javascript::void(0);" onclick="mySwipe.prev()">Previous</a></span></div>
  </div>
</div>   
</section>
<!-- EOF OF ABOUT PAN -->
<div class="clear"></div>
<!-- SOF of NAV BORDER PAN -->