<div id="content">

		<?php if( $post->project->platform == 'habari' ): ?><p class="intro"><?php echo $post->title; ?> is a <?php echo $post->project->type; ?> developed for the <a href="http://habariproject.org">Habari</a> blogging platform and released under the <a href="<?php echo $post->project->license['url']; ?>" rel="license"><?php echo $post->project->license['name']; ?></a>.</span></p><?php endif; ?>
			
		<?php echo $post->content_out; ?>
		
		<?php if( $post->project->screenshot_url ): ?>
		<div id="screenshots">
			<h1>Screenshot</h1>
			<img src="<?php echo $post->project->screenshot_url; ?>" alt="Screenshot of the Scientist theme" />
		</div>
		<?php endif; ?>
		
		<?php if( $post->project->help != NULL ): ?>
			
		<h1>Help</h1>
		<?php echo $post->project->help; ?>
		
		<?php endif; ?>
		
		<h1>Download</h1>
		<p>A variety of releases are listed below. <?php if( $post->project->platform == 'habari'): ?>Please download the one compatible with your version of Habari.<?php endif; ?></p>
		<table id="releases">
			<thead>
				<tr>
					<th>Tag</th>
					<th>Date</th>
					<th>Description</th>
					<th>Download</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Add a "tag" to download the alpha development version;
				$alphatag = new stdclass;
				$alphatag->tag = 'alpha';
				$alphatag->date = $post->project->pushdate;
				$alphatag->zipball_url = $post->project->zipball_url;
				
				if( $post->project->platform == 'habari' )
				{
					$alphatag->message = 'Alpha version currently being developed; only compatible with the latest development version of Habari (' . Version::get_habariversion() . ')';
				}
				else
				{
					$alphatag->message = 'Alpha version currently being developed; not for the feint of heart';
				}
				
				$tags = $post->project->tags;
				
				array_unshift( $tags, $alphatag );
				
				foreach( $tags as $tag ): ?>
				<tr>
					<td><?php echo $tag->tag; ?></td>
					<td class="date"><?php echo $tag->date->format( 'Y-m-d'); ?></td>
					<td><?php echo $tag->message; ?></td>
					<td class="download"><a href="<?php echo $tag->zipball_url; ?>" title="Download a zip of the <?php echo $post->project->type; ?>">ZIP</a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<h1>GitHub</h1>
		<p><?php echo $post->title; ?> is hosted on <a href="<?php echo $post->project->github; ?>">GitHub</a>. You can grab the current version (<strong><?php echo $post->project->version; ?></strong>) by cloning the GitHub <a href="<?php echo $post->project->cloneurl; ?>">repository</a>. I also encourage you to fork the project.</p>
		<pre class="code shell">git clone <em><?php echo $post->project->cloneurl; ?></em></pre>

		<h1>Support</h1>
		<p>If you have any issue or suggestion concerning this project, please <a href="<?php echo $post->project->new_issue_url; ?>">open an issue</a> on GitHub.</p>
</div>