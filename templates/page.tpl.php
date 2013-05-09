<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<div class="grid">

	<header role="banner" class="col header">
	  <div class="siteinfo">
	    <?php if ($logo): ?>
	      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
	        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	      </a>
	    <?php endif; ?>
	
	    <?php if($site_name OR $site_slogan ): ?>
	    <hgroup>
	      <?php if($site_name): ?>
	        <h1><?php print $site_name; ?></h1>
	      <?php endif; ?>
	      <?php if ($site_slogan): ?>
	        <h2><?php print $site_slogan; ?></h2>
	      <?php endif; ?>
	    </hgroup>
	    <?php endif; ?>
	  </div>
	
	  <?php if($page['header']): ?>
	    <div class="header-region">
	      <?php print render($page['header']); ?>
	    </div>
	  <?php endif; ?>
	
	</header>
	
	  <div role="main" class="col main-content <?php print $classes; ?>">
	    <?php print render($title_prefix); ?>
	    <?php if ($title): ?>
	      <?php print render($title_prefix); ?>
	      <h1><?php print $title; ?></h1>
	      <?php print render($title_suffix); ?>
	    <?php endif; ?>
	    <?php print render($title_suffix); ?>
	
	    <?php print $breadcrumb; ?>
	
	    <?php if ($action_links): ?>
	      <ul class="action-links"><?php print render($action_links); ?></ul>
	    <?php endif; ?>
	
	    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
	      <nav class="tabs"><?php print render($tabs); ?></nav>
	    <?php endif; ?>
	
	    <?php if($page['highlighted'] OR $messages){ ?>
	      <div class="drupal-messages">
	      <?php print render($page['highlighted']); ?>
	      <?php print $messages; ?>
	      </div>
	    <?php } ?>
	
	    <?php print render($page['content_pre']); ?>
	
	    <?php print render($page['content']); ?>
	
	    <?php print render($page['content_post']); ?>
	
	  </div><!--/main-->
	
	  <?php if ($page['sidebar_first']): ?>
	    <div class="col sidebar-first">
	    <?php print render($page['sidebar_first']); ?>
	    </div>
	  <?php endif; ?>
	
	  <?php if ($page['sidebar_second']): ?>
	    <div class="col sidebar-second">
	      <?php print render($page['sidebar_second']); ?>
	    </div>
	  <?php endif; ?>
	
	<footer role="contentinfo" class="col footer">
	  <?php print render($page['footer']); ?>
	</footer>
</div> <!-- grid -->