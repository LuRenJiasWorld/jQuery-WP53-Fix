<?php
/**
 * Plugin Name:       jQuery-WordPress53-Fix
 * Description:       Fix the jQuery compatibility issue in WordPress 5.3
 * Version:           1.0.0
 * Author:            LuRenJiasWorld
 * Author URI:        https://github.com/LuRenJiasWorld
 * License:           Apache 2.0
 */

// JUST FIX IT WITHIN A SINGLE LINE OF CODE
add_action("admin_head", function() { echo "<script> var $ = jQuery; </script> "; } );
