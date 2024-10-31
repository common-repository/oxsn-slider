<?php 


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( get_option( 'oxsn_slider_effect_control' ) ) : 

	$slider_effect = get_option( 'oxsn_slider_effect_control' );

else : 

	$slider_effect = 'fade';

endif; 

if ( get_option( 'oxsn_slider_pause_control' ) ) : 

	$slider_pause = get_option( 'oxsn_slider_pause_control' );

else : 

	$slider_pause = '6400';

endif; 

if ( get_option( 'oxsn_slider_slide_count_control' ) ) : 

	$slider_slide_count = get_option( 'oxsn_slider_slide_count_control' );

else : 

	$slider_slide_count = '1';

endif; 

if ( get_option( 'oxsn_slider_move_count_control' ) ) : 

	$slider_move_count = get_option( 'oxsn_slider_move_count_control' );

else : 

	$slider_move_count = '1';

endif; 

if ( get_option( 'oxsn_slider_auto_control' ) === 'false' ) : 

	$slider_auto = 'false';

else : 

	$slider_auto = 'true';

endif; 

if ( get_option( 'oxsn_slider_pagination_control' ) === 'false' ) : 

	$slider_pagination = 'false';

else : 

	$slider_pagination = 'true';

endif; 


?>

<script>

	(function($) {

		var sudoSlider = $(".oxsn_slider ul").sudoSlider({ 

			effect: "<?php echo $slider_effect; ?>",

			pause: <?php echo $slider_pause; ?>,

			auto: <?php echo $slider_auto; ?>,

			prevNext: false,

			numeric: <?php echo $slider_pagination; ?>,

			continuous: true,

			customLink: '.oxsn_slider_link',

			slideCount: <?php echo $slider_slide_count; ?>,

			moveCount: <?php echo $slider_move_count; ?>,

		});
		
	})(jQuery);

</script>