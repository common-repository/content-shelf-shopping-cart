<div class="wrap">

<div class="topBar">

<img class="cs logo" src="<?php echo plugins_url(basename(CONTENTSHELF_PLUGIN_DIR) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'cslogo.png', 'contentshelf-shopping-cart'); ?>" alt="Content Shelf" title="Content Shelf" />

</div>

<div class="form-section">

<div id="contentshelf-page-info" clas='txtLeft'>

<p>
The Content Shelf plugin contains 5 widgets that make up the shopping cart store. By default all of these store widgets are active and include.
</p>

<p>
#1) Store Widget (always active)<br/>
#2) Category Widget (active only if categories are being used)<br/>
#3) Search Widget (optional)<br/>
#4) Cart Count Widget (optional)<br/>
#5) Language Widget (optional)
</p>

<p>
The settings below will dictate which optional widgets are active on the store page. By un-checking a widget it will not appear on the store page.
</p>

</div>

<form method="post" action="options.php">

<?php settings_fields('contentshelf_store_options'); ?>
<?php do_settings_sections('contentshelf_store_settings'); ?>
<?php submit_button(); ?>

</form>

<div class='txtLeft'>

<p>
Note - Optional widgets can also be used in a sidebar by navigating to Appearance > Widgets then drag and drop the widget to the area you want it seen.
</p>

<p>
To sign up for a free Content Shelf account <a href="http://contentshelf.com/sign-up" target="blank">click here</a>.
</p>

</div>

</div>

</div>
