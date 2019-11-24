<?php
/**
 * Plugin Name:       jQuery-WP53-Fix
 * Description:       Fix the jQuery compatibility issue in WordPress 5.3
 * Version:           1.1
 * Author:            LuRenJiasWorld
 * Author URI:        https://github.com/LuRenJiasWorld
 * License:           GPLv3
 */

// JUST FIX IT WITHIN A SINGLE LINE OF CODE
add_action("admin_head", function () {
    echo "<script> var $ = jQuery; </script>";
});

// AND... ANOTHER LINE OF CODE, NEARLY THE SAME BUT WITH DIFFERENT HOOK ENTRY
add_action("wp_head", function () {
    echo "<script> var $ = jQuery; </script>";
});
