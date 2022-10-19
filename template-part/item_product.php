<?php global $product; ?>
    <div class="item-product">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>"></a>

            <?php if ($product->is_on_sale()) { ?>

                <span class=" sale">Giảm <br><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()); ?>%</span>

            <?php } ?>
            <div class="action">
                <a href="?add_to_cart=<?php the_ID() ?>" class="buy"><i class="fa fa-cart-plus"></i> Mua
                    ngay</a>
                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                    thích</a>
                <div class="clear"></div>
            </div>
        </div>
        <div class="info-product">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="price">
                <?php echo $product->get_price_html(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="view-more">Xem chi tiết</a>
        </div>
    </div>
