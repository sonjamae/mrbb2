<?php

/**

 * Template part for displaying site info

 *

 * @package Bosa

 */



?>



<div class="site-info">

	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'Mackenzie River Basin Board' ) ) );
		echo esc_html( date('Y') );
		echo " Mackenzie River Basin Board"
	?>
</div><!-- .site-info -->