<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_slider_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_slider_quicktags' );
	function oxsn_slider_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_slider_wrap_quicktag', '[oxsn_slider_wrap]', '[oxsn_slider_wrap class=""]', '[/oxsn_slider_wrap]', 'oxsn_slider_wrap', 'Carousel Wrap', 201 );
				QTags.addButton( 'oxsn_slider_slide_quicktag', '[oxsn_slider_slide]', '[oxsn_slider_slide class=""]', '[/oxsn_slider_slide]', 'oxsn_slider_slide', 'Carousel Slide', 202 );
			</script>

		<?php

		}

	}

}


?>