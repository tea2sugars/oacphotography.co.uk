
<?php

$root = $_SERVER['HTTP_HOST'];
?>
<script>
jQuery(document).ready(function(){
var path = 'http://<?php echo $root;?>';
ajaxurl= path+'/wp-admin/admin-ajax.php';
	var data = {		
                action: 'get_about_content',
                id :63	
                               
	};
	// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
jQuery.post(ajaxurl, data, function(response) {
alert(response);
jQuery('.about_content').html(response);
});
});
</script>

<div class="about_content">

</div>
