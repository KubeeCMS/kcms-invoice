<?php
/**
 * Document data for proforma template.
 *
 * Override this template by copying it to [your theme]/woocommerce/invoice/ywpi-invoice-details.php
 *
 * @author  YITH
 * @package YITH\PDFInvoice\Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

$current_order   = $document->order;
$invoice_details = new YITH_Invoice_Details( $document );
?>
<div class="invoice-data-content">
	<table>
		<tr class="invoice-order-number">
			<td class="left-content">
				<?php esc_html_e( 'Order No.', 'yith-woocommerce-pdf-invoice' ); ?>
			</td>
			<td class="right-content">
				<?php echo wp_kses_post( $document->order->get_order_number() ); ?>
				<?php do_action( 'yith_ywpi_template_order_number', $document ); ?>
			</td>
		</tr>

		<tr class="ywpi-invoice-date">
			<td class="left-content">
				<?php esc_html_e( 'Order date', 'yith-woocommerce-pdf-invoice' ); ?>
			</td>
			<td class="right-content">
				<?php echo wp_kses_post( $document->get_formatted_order_date() ); ?>
			</td>
		</tr>
		<tr class="invoice-amount">
			<td class="left-content">
				<?php esc_html_e( 'Amount', 'yith-woocommerce-pdf-invoice' ); ?>
			</td>
			<td class="right-content">
				<?php echo wp_kses_post( $invoice_details->get_order_currency_new( $document->order->get_total() ) ); ?>
			</td>
		</tr>
	</table>
</div>
