<?php  
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>


<?php 


if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div class="ngg-galleryoverview ngg-galleryoverview-new slide thumb" id="thumb_<?php echo $gallery->anchor;?>">

<?php if ($gallery->show_slideshow) { ?>
	<!-- Slideshow link -->
	<!--<div class="slideshowlink">
		<a class="slideshowlink" href="<?php echo $gallery->slideshow_link ?>">
			<?php //echo $gallery->slideshow_link_text ?>
		</a>
	</div>-->
<?php } ?>

<?php if ($gallery->show_piclens) { ?>
	<!-- Piclense link -->
	<div class="piclenselink">
		<a class="piclenselink" href="<?php echo $gallery->piclens_link ?>">
			<?php _e('[View with PicLens]','nggallery'); ?>
		</a>
	</div>
<?php } ?>
	
	<!-- Thumbnails -->
	<?php 
        $v=0;
        foreach ( $images as $image ) : ?>
	
	<div id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box" <?php echo $image->style ?> >
		<div class="ngg-gallery-thumbnail" >
		    <?php if($gallery->ID == 6 ){  ?>
                    <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
				<?php if ( !$image->hidden ) { ?>
				<?php if($v==0) {?>	<img title="<?php //echo $gallery->title ?>" alt="<?php echo $gallery->title ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> /><?php //echo $image->alttext ?>
				<?php } ?> <?php } ?>
			</a>
                     <?php } elseif($gallery->ID == 1){?>
 <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
				<?php if ( !$image->hidden ) { ?>
				<?php if($v==0) {?>	<img title="<?php //echo $gallery->title ?>" alt="<?php echo $gallery->title ?>" src="<?php echo $image->thumbnailURL ?>"  /><?php //echo $image->alttext ?>
				<?php } ?> <?php } ?>
			</a>
<?php } elseif($gallery->ID == 5){?>
 <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
				<?php if ( !$image->hidden ) { ?>
				<?php if($v==0) {?>	<img title="<?php //echo $gallery->title ?>" alt="<?php echo $gallery->title ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> /><?php //echo $image->alttext ?>
				<?php } ?> <?php } ?>
			</a>  
<?php }else { ?>
                    <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
				<?php if ( !$image->hidden ) { ?>
				<img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
				<?php } ?>
			</a>
                          <?php }?>  
		</div>
	</div>
	
	<?php if ( $image->hidden ) continue; ?>
	<?php if ( $gallery->columns > 0 && ++$i % $gallery->columns == 0 ) { ?>
		<br style="clear: both" />
	<?php } ?>

 	<?php 
        $v++;
        endforeach; ?>
 	
	<!-- Pagination -->
 	
 	
</div>
<?php echo $pagination ?>
<?php endif; ?>
