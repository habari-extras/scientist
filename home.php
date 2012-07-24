<?php $theme->display('header'); ?>
<div id="content">
	<p class="intro">Welcome to the lab of <a href="http://morgante.net">Morgante Pell</a>, where various projects are hosted.</p>
	
	<ol class="projects">
	<?php foreach( Posts::get( array( 'content_type' => Post::type('project' ),  'nolimit' => TRUE, 'orderby' => 'title' ) ) as $post ): ?>
		<li<?php if( $post->pubdate->modify('+1 month')->int >= HabariDateTime::date_create()->int ): ?> class="new"<?php endif; ?>><a href="<?php echo $post->permalink; ?>"><?php echo $post->title; ?></a></li>
	<?php endforeach; ?>
	
</div>
<?php $theme->display('footer'); ?>