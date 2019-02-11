<?php
    function emptytheme_script_enqueue() {
        wp_enqueue_style('customstyle', get_template_directory_uri().'/css/emptytheme.css', array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'emptytheme_script_enqueue');
?>