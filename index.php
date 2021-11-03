<?php

/**
 * @package Hafez
 */
/*
Plugin Name: Hafez
Plugin URI: https://mrlast.com/project/hafez/
Description: فال حافظ شیرازی
Version: 1.0
Author: Mr last
Author URI: https://mrlast.com/
License: GPLv2 or later
Text Domain: hafez
*/
add_action('admin_menu', 'plugin_hafez_admin_add_page');
function plugin_hafez_admin_add_page()
{
  add_menu_page('فال حافظ', 'فال حافظ', 'manage_options', 'hafez', 'plugin_hafez_page');
  require_once(plugin_dir_path(__FILE__) . '/sql.php');
}
function plugin_hafez_page()
{ ?>
<p>برای استفاده از فال حافظ <br><br><strong>صفحه</strong> ای به نام<strong> نمایش فال حافظ بسازید</strong> و کد کوتاه [hafez] را در آن قرار دهید . <br><br>بعد از این <strong>صفحه</strong> ای به نام<strong> فال حافظ</strong> بسازید و به صفحه نمایش فال حافظ لینک بدهید .</p>
  
<?php }
function wp_hafez_function()
{
  global $wpdb;
  $table_name = $wpdb->prefix . "Hafez";
  $result = $wpdb->get_results("SELECT * FROM `$table_name` ORDER BY RAND() LIMIT 1");
  foreach ($result as $page) {
    $Content = "<center style='direction:rtl'>" . $page->title . '<br/>' . $page->content . '</center><br/>';
    return $Content;
  }
}

add_shortcode('hafez', 'wp_hafez_function');
