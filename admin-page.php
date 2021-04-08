<?php

function mlm_admin_menu() {
	add_menu_page("MLM Admin Site", "MLM Admin Site", "manage_options", "mlm_slug", "mlm_admin_menu_site", "dashicons-schedule", 50);
}

function mlm_enqueue_styles() {
	wp_enqueue_style( "mlm", plugin_dir_url( __FILE__ ) . 'styles/mlm-styles.scss', array(), false , 'all' );		

}

add_action("admin_menu", "mlm_admin_menu");
add_action("wp_enqueue_style", "mlm_enqueue_styles");

function mlm_admin_menu_site() {
	?>
	<h2 class="mlm-heading"> MLM - DASHBOARD </h1>
	<form id="mlm-setting-form" action="<?php echo plugins_url( 'CommissionSettingsController.php', __FILE__ ); ?>" method="post">
		<input type="hidden" value="update">
		<table class="form-table" id="fieldset-mlm-settings" role="presentation">
			<tbody>
				<tr class="form-field">
					<th scope="row">
						<label for="commissionBase">Commission Base</label>					
					<td>
					<select class="rtwalwm_select2" multiple="multiple" id="" name="rtwwwap_commission_settings_opt[per_cat_0][]" data-placeholder="<?php echo esc_html__( 'Select categories', 'rtwalwm-wp-wc-affiliate-program' ); ?>">
						<option value="" ></option>
					</select>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<p class="submit">
		<input type="submit" name="submit" id="submit" class="button button-primary" value="update">
	</p>
<?php	
}	

function mlm_admin_init () {
	
		
	
}



?>