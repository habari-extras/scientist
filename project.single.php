<?php
if( $post->project->host == 'github' ):
	$theme->display('project.github');
else:
	$theme->display('header'); ?>
<div id="content">
	
	<?php echo $post->content_out; ?>
	
</div>
<?php
$theme->display('footer');
endif;
?>