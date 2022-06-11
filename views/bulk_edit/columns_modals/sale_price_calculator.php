<?php if (!empty($product)) : ?>
    <div class="wcbef-modal" id="wcbef-modal-sale_price-<?php echo esc_attr($product['id']); ?>">
        <div class="wcbef-modal-container">
            <div class="wcbef-modal-box wcbef-modal-box-sm">
                <div class="wcbef-modal-content">
                    <div class="wcbef-modal-title">
                        <h2><?php esc_attr_e('Calculator', WCBEF_NAME); ?> - <span class="wcbef-modal-product-title"><?php echo esc_html($product['post_title']); ?></span></h2>
                        <button type="button" class="wcbef-modal-close" data-toggle="modal-close">
                            <i class="lni lni-close"></i>
                        </button>
                    </div>
                    <div class="wcbef-modal-body">
                        <div class="wcbef-wrap">
                            <select id="wcbef-sale_price-calculator-operator-<?php echo esc_attr($product['id']); ?>" title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="rp-">rp-</option>
                            </select>
                            <input type="number" placeholder="<?php esc_html_e('Enter Value ...', WCBEF_NAME); ?>" id="wcbef-sale_price-calculator-value-<?php echo $product['id']; ?>" title="<?php esc_html_e('Value', WCBEF_NAME); ?>">
                            <select id="wcbef-sale_price-calculator-type-<?php echo esc_attr($product['id']); ?>" title="<?php esc_html_e('Select Type', WCBEF_NAME); ?>">
                                <option value="n">n</option>
                                <option value="%">%</option>
                            </select>
                            <select id="wcbef-sale_price-calculator-round-<?php echo esc_attr($product['id']); ?>" title="<?php esc_html_e('Rounding', WCBEF_NAME); ?>">
                                <option value=""><?php esc_html_e('no rounding', WCBEF_NAME); ?></option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="19">19</option>
                                <option value="29">29</option>
                                <option value="39">39</option>
                                <option value="49">49</option>
                                <option value="59">59</option>
                                <option value="69">69</option>
                                <option value="79">79</option>
                                <option value="89">89</option>
                                <option value="99">99</option>
                            </select>
                        </div>
                    </div>
                    <div class="wcbef-modal-footer">
                        <button type="button" data-product-id="<?php echo esc_attr($product['id']); ?>" data-field="sale_price" data-toggle="modal-close" class="wcbef-button wcbef-button-blue wcbef-edit-action-price-calculator">
                            <?php esc_html_e('Apply Changes', WCBEF_NAME); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>