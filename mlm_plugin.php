<?php
/*
Plugin Name: MLM
Description: MultiLevelMarketing
Version: 1.0
Author: bytewise
*/

require_once __DIR__ . "/admin-page.php";

function mlm_wp_head() {
	?>
	<meta name="description" content="mlm_meta_description">
	<?php	
}

add_action("wp_head", "mlm_wp_head");

function mlm_wp_footer() {
	?>
	<p>mlm_installed</p>
	<?php	
}
add_action("wp_footer", "mlm_wp_footer");
?>