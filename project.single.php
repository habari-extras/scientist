<?php $theme->display('header'); ?>
<div id="content">

	<?php if( $post->project->platform == 'habari' ): ?>
		
		<p class="intro"><?php echo $post->title; ?> is a <?php echo $post->project->type; ?> developed for the <a href="http://habariproject.org">Habari</a> blogging platform and released under the <a href="<?php echo $post->project->license['url']; ?>" rel="license"><?php echo $post->project->license['name']; ?></a>.</span></p>
			
		<?php echo $post->project->description; ?> 
		
		<h1>GitHub</h1>
		<p><?php echo $post->title; ?> is hosted on <a href="<?php echo $post->project->github; ?>">GitHub</a>. You can grab the current version (<strong><?php echo $post->project->version; ?></strong>) by cloning the GitHub <a href="<?php echo $post->project->cloneurl; ?>">repository</a>. I also encourage you to fork the project.</p>
		<pre class="code shell">git clone <em><?php echo $post->project->cloneurl; ?></em></pre>
		
		<?php if( $post->project->help != NULL ): ?>
			
		<h1>Help</h1>
		<?php echo $post->project->help; ?>
		
		<?php endif; ?>
		
		<h1>Download</h1>
		<p>A variety of releases are listed below.</p>
		<?php Utils::debug( $post->project->tags ); ?>
		
		<p>You can download a zip of <a href="http://habariproject.org/dist/plugins/<?php echo $post->slug; ?>.zip"><strong><?php echo $post->title; ?> <?php echo $post->project->version; ?></strong></a>, which is a mirror of the <a href="#svn">Subversion</a> trunk and is compatible with <strong>Habari <?php echo Version::get_habariversion(); ?></strong>. <strong class="warning">This code is not necessarily stable!</strong></p>
		<p class="download"><a href="http://habariproject.org/dist/plugins/<?php echo $post->slug; ?>/<?php echo $post->slug; ?>-trunk.zip">Download <?php echo $post->title; ?> <?php echo $post->project->version; ?></a></p>
		<p>Past versions, including ones for stable Habari releases, can be found <a href="http://habariproject.org/dist/plugins/<?php echo $post->slug; ?>">here</a>.</p>


		<h1>Support</h1>
		<p>If you have any issue or comment concerning this project, feel free to <a href="http://morgante.net/contact">contact me</a> and I will gladly assist you.</p>

	<?php elseif( $post->project->type == 'plugin' ): ?>
		
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