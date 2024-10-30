<div class="wrap">

<div class="topBar">
<img class="cs logo" src="<?php echo plugins_url(basename(CONTENTSHELF_PLUGIN_DIR) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'cslogo.png', 'contentshelf-shopping-cart'); ?>" alt="Content Shelf" title="Content Shelf" />
</div>

<div class="form-section">

<div id="contentshelf-page-info" class='txtLeft'>
<p>
To connect this plugin to your Content Shelf Store, login to the Content Shelf Dashboard and navigate to Sell &gt; Store Settings &gt; Store Profile then copy and paste the Store ID and Store URL to this page and click "Save Changes".
</p>
</div>

<form method="post" action="options.php">

<?php settings_fields('contentshelf_plugin_options'); ?>
<?php do_settings_sections('contentshelf_plugin_setup'); ?>
<?php submit_button(); ?>

</form>

<div class='txtLeft'>
<p>
To sign up for a free Content Shelf account <a href="http://contentshelf.com/sign-up" target="blank">click here</a>.
</p>
</div>
</div>

</div>
