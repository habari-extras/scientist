<?php $theme->display('header'); ?>
<div id="content">
	<?php if( $post->project->type == 'plugin' ): ?>
		
		<p class="intro"><?php echo $post->project->description; ?> <?php echo $post->title; ?> is a plugin developed for the <a href="http://habariproject.org">Habari</a> blogging platform and released under the <a href="<?php echo $post->project->license['url']; ?>" rel="license"><?php echo $post->project->license['name']; ?></a>.</span></p>
		
		<?php if( $post->project->help != NULL ): ?>
			
		<h1>Help</h1>
		<?php echo $post->project->help; ?>
		
		<?php endif; ?>
		
		<h1>Download</h1>
		<p>You can download a zip of <a href="http://habariproject.org/dist/plugins/<?php echo $post->slug; ?>.zip"><strong><?php echo $post->title; ?> <?php echo $post->project->version; ?></strong></a>, which is a mirror of the <a href="#svn">Subversion</a> trunk and is compatible with <strong>Habari <?php echo Version::get_habariversion(); ?></strong>. <strong class="warning">This code is not necessarily stable!</strong></p>
		<p class="download"><a href="http://habariproject.org/dist/plugins/<?php echo $post->slug; ?>/<?php echo $post->slug; ?>-trunk.zip">Download <?php echo $post->title; ?> <?php echo $post->project->version; ?></a></p>
		<p>Past versions, including ones for stable Habari releases, can be found <a href="http://habariproject.org/dist/plugins/<?php echo $post->slug; ?>">here</a>.</p>
		<h1>Subversion</h1>
		<p>The development version of <strong><?php echo $post->title; ?> <?php echo $post->project->version; ?></strong> can be checked out from <a href="<?php echo $post->project->repository->trunk; ?>"><code><?php echo $post->project->repository->trunk; ?></code></a>.</p>
		<pre class="code shell">svn co <em><?php echo $post->project->repository->trunk; ?></em> <?php echo $post->slug; ?></pre>

		<h1>Support</h1>
		<p>If you have any issue or comment concerning this project, feel free to <a href="http://morgante.net/contact">contact me</a> and I will gladly assist you.</p>

	<?php else: ?>
		
	<?php echo $post->content_out; ?>
	
	<?php endif; ?>
</div>
<?php $theme->display('footer'); ?>