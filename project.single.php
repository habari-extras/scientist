<?php
$theme->display('header');

$ribbons = array( 'abandoned' => 'ABANDONED' );
foreach( $post->tags as $tag )
{
	if( isset( $ribbons[ $tag->term ] ) )
	{
		$ribbon = $tag->term;
		break;
	}
}
if( isset( $ribbon ) ):
?>
<div id="ribbon" class="<?php echo $ribbon; ?>"><div id="ribbon-internal"><?php echo $ribbons[ $ribbon ]; ?></div></div>
<?php
endif;

if( $post->project->host == 'github' ):
	$theme->display('project.github');
else:
	 ?>
<div id="content">
	
	<?php echo $post->content_out; ?>
	
</div>
<?php
endif;
$theme->display('footer');
?>