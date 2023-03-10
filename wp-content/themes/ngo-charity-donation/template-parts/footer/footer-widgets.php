<?php
/**
 * Displays footer widgets if assigned
 *
 * @subpackage NGO Charity Donation
 * @since 1.0
 * @version 1.4
 */
?>

<?php //Set widget areas classes based on user choice
    $ngo_charity_donation_footer_columns = get_theme_mod('ngo_charity_donation_footer_widget', '4');
    if ($ngo_charity_donation_footer_columns == '3') {
      $ngo_charity_donation_cols = 'col-lg-4 col-md-4';
    } elseif ($ngo_charity_donation_footer_columns == '4') {
      $ngo_charity_donation_cols = 'col-lg-3 col-md-3';
    } elseif ($ngo_charity_donation_footer_columns == '2') {
      $ngo_charity_donation_cols = 'col-lg-6 col-md-6';
    } else {
      $ngo_charity_donation_cols = 'col-lg-12 col-md-12';
    }
  ?>
	<?php
  if ( is_active_sidebar( 'footer-1' ) ||
    is_active_sidebar( 'footer-2' ) ||
    is_active_sidebar( 'footer-3' ) ||
    is_active_sidebar( 'footer-4' ) ) :
  ?>
		<aside class="widget-area" role="complementary">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="widget-column footer-widget-1 <?php echo esc_attr( $ngo_charity_donation_cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="widget-column footer-widget-2 <?php echo esc_attr( $ngo_charity_donation_cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="widget-column footer-widget-3 <?php echo esc_attr( $ngo_charity_donation_cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="widget-column footer-widget-4 <?php echo esc_attr( $ngo_charity_donation_cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
      </div>
		</aside>
  <?php endif; ?>
