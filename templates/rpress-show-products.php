<?php
$color = rpress_get_option( 'checkout_color', 'red' );
?>
<div class="view-food-item-wrap">
	<form id="fooditem-details" class="row">
		{Formatted_Cats}
	</form>
	<div class="clear"></div>
	<div class="rp-col-md-12 md-4-top special-margin <?php echo $color; ?> ">
		<a href="#" class="special-instructions-link">
			<?php echo __('Special Instructions?', 'restropress'); ?>
		</a>
		<textarea placeholder="<?php echo __('Add Instructions...', 'restropress') ?>" class="rp-col-md-12 special-instructions " name="special_instruction"></textarea>
</div>
