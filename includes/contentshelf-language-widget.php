<?php

class ContentShelfLanguageWidget extends WP_Widget {

    function __construct() {
        $widget_ops = array(
            'classname' => 'ContentShelfLanguageWidget',
            'description' => __("Displays a language selection control for your customers.",
                                'contentshelf-lanugage-widget'),
        );
        parent::__construct('contentshelf_language', __('Content Shelf Language', 'contentshelf-language-widget'), $widget_ops);
    }

    function widget($args, $instance) {
        extract($args);

        $plugin_options = get_option('contentshelf_plugin_options');
        $store_options = get_option('contentshelf_store_options');
        $css_file_tpl = basename(CONTENTSHELF_PLUGIN_DIR) . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'contentshelf-common.css';
        $css_file = plugins_url($css_file_tpl, 'contentshelf-shopping-cart');
        $js_file_tpl = basename(CONTENTSHELF_PLUGIN_DIR) . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'contentshelf-common.js';
        $js_file = plugins_url($js_file_tpl, 'contentshelf-shopping-cart');
        wp_enqueue_style('contentshelf-css', $css_file, array(), CONTENTSHELF_PLUGIN_VERSION);
        wp_enqueue_script('contentshelf-js', $js_file, array(), CONTENTSHELF_PLUGIN_VERSION);
        $widget_content = contentshelf_get_template('templates' . DIRECTORY_SEPARATOR . 'contentshelf-language-widget.php', compact('plugin_options', 'store_options'));

        $title = apply_filters('widget_title', empty($instance['title']) ? '&nbsp;' : $instance['title']);

        echo $before_widget;

        //if ( $title ) echo $before_title . $title . $after_title;
        echo $widget_content;
        echo $after_widget;
    }

    function update($new_instance, $old_instance){
        $instance = $old_instance;
        $instance['title'] = strip_tags(stripslashes($new_instance['title']));

        return $instance;
    }

    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array('title'=>'') );
        // TODO(cbeasley):  is this form applicable for our purposes.
    }

}
