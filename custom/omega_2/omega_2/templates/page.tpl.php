<?php
?>
<div>
	<header class="main">
		<table class="main">
			<tr>
				<td rowspan="3" align="right" style="padding-top: 10px">

					<?php if ($logo): ?>
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
						   class="site-logo"><img
								src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
					<?php endif; ?>
				</td>
				<td rowspan="3" align="center">
					<?php if ($site_name || $site_slogan): ?>
						<?php if ($site_name): ?>
							<h2 class="site-name" style="margin: 5px 0px 10px;">
								<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"
								   rel="home"><span><?php print $site_name; ?></span></a>
							</h2>
						<?php endif; ?>

						<?php if ($site_slogan): ?>
							<h3 class="site-slogan" style="margin: 0px 0px 10px;"><?php print $site_slogan; ?></h3>
						<?php endif; ?>
					<?php endif; ?>
				</td>
				<td width="70%">
					<?php print render($page['header']); ?>
				</td>
			</tr>
			<tr><td><?php print render($page['branding']); ?></td></tr>
			<tr><td><?php print render($page['navigation']); ?></td></tr>
		</table>
	</header>

	<table class="main pad">
		<tr valign="top">
			<td width="18%" bgcolor="#dcdcdc">
				<?php print $breadcrumb; ?>
				<?php print render($page['sidebar_first']); ?>
			</td>
			<td width="67%">
				<div class="l-content" role="main">
					<?php print render($page['highlighted']); ?>
					<!--?php print $breadcrumb; ?-->
					<a id="main-content"></a>
					<?php print render($title_prefix); ?>
					<?php if ($title): ?>
						<h1><?php print $title; ?></h1>
					<?php endif; ?>
					<?php print render($title_suffix); ?>
					<?php print $messages; ?>
					<?php print render($tabs); ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?>
						<ul class="action-links"><?php print render($action_links); ?></ul>
					<?php endif; ?>
					<?php print render($page['content']); ?>
					<?php print $feed_icons; ?>
				</div>
			</td>
			<td width="15%" bgcolor="#dcdcdc"><?php print render($page['sidebar_second']); ?></td>
		</tr>
	</table>
	<footer role="contentinfo" class='BottomPanel'>
		<?php print render($page['footer']); ?>
	</footer>
</div>

