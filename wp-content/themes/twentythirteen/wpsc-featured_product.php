<?php
foreach ( $query as $product ) :
	setup_postdata( $product );
	
	global $post;
	$old_post = $post;
	$post = $product;
?>
<h2>wpsc-featured_product</h2>
    <div class="wpsc_container wpsc_featured">
        <div class="featured_product_display">
            <div class="featured_product_display_item product_view_<?php $product->ID; ?>">
               
                <div class="item_text">
                    <h2><a href='<?php echo get_permalink( $product->ID ); ?>'><?php echo get_the_title( $product->ID ); ?></a></h2>
                      <div class="pricedisplay featured_product_price">
                        <?php esc_html_e( 'Price:', 'wpsc' ); ?> <?php echo wpsc_the_product_price(); ?>
                    </div>
                    
                    <div class='wpsc_description'>
                        <?php echo wpsc_the_product_description(); ?> <a href='<?php echo get_permalink( $product->ID ); ?>'><?php esc_html_e( 'More Information&hellip;', 'wpsc' ); ?></a>
                    </div>
       
                </div><?php if ( wpsc_the_product_thumbnail ( ) ) : ?>
                 <div class="featured_item_image">
                    <a href="<?php echo get_permalink( $product->ID ); ?>" title="<?php echo get_the_title( $product->ID ); ?>"><?php echo wpsc_the_sticky_image( wpsc_the_product_id() ); ?></a>
                </div><?php else: ?>

                <div class="item_no_image">
                    <a href="<?php echo get_the_title( $product->ID ); ?>"><span><?php esc_html_e( 'No Image Available', 'wpsc' ); ?></span></a>
                </div><?php endif; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
<?php endforeach; 
$post = $old_post;
?>