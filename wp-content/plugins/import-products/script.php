<?php


	require_once dirname(__FILE__).'/simple_html_dom.php';

	$html = file_get_html('https://www.shop-pharmacie.fr/beaute/BE03167343/uriage-bariesun-lait-soyeux-autobronzant.htm');
	
	vdd($html);
	foreach ($html->find('.result-list-entry') as $post){
		addProduct([
			'title' => 'Test Product',
			'content' => 'Test content',
			'excerpt' => 'Test excerpt',
		]);
		vdd($post);
	}
	exit;


	

	function addProduct($product){

		$post_id = wp_insert_post(array(
			'post_title' => $product['title'],
			'post_type' => 'product',
			'post_staus' => 'draft', 
			'post_content' => $product['content'],
			'post_excerpt' => $product['excerpt']
		));
		wp_set_object_terms( $post_id, 'simple', 'product_type' );
		
		update_post_meta( $post_id, '_visibility', 'visible' );
		update_post_meta( $post_id, '_stock_status', 'instock');
		update_post_meta( $post_id, 'total_sales', '0' );
		update_post_meta( $post_id, '_downloadable', 'no' );
		update_post_meta( $post_id, '_virtual', 'yes' );
		update_post_meta( $post_id, '_regular_price', '' );
		update_post_meta( $post_id, '_sale_price', '' );
		update_post_meta( $post_id, '_purchase_note', '' );
		update_post_meta( $post_id, '_featured', 'no' );
		update_post_meta( $post_id, '_weight', '11' );
		update_post_meta( $post_id, '_length', '11' );
		update_post_meta( $post_id, '_width', '11' );
		update_post_meta( $post_id, '_height', '11' );
		update_post_meta( $post_id, '_sku', 'SKU11' );
		update_post_meta( $post_id, '_product_attributes', array() );
		update_post_meta( $post_id, '_sale_price_dates_from', '' );
		update_post_meta( $post_id, '_sale_price_dates_to', '' );
		update_post_meta( $post_id, '_price', '11' );
		update_post_meta( $post_id, '_sold_individually', '' );
		update_post_meta( $post_id, '_manage_stock', 'yes' );
		wc_update_product_stock($post_id, $single['qty'], 'set');
		update_post_meta( $post_id, '_backorders', 'no' );
		

	}





















?>
