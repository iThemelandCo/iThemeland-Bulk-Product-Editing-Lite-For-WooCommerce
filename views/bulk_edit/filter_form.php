<div id="wcbef-filter-form" <?php echo (isset($settings['sticky_search_form']) && $settings['sticky_search_form'] == 'no') ? 'style="position:static"' : '' ?>>
    <div id="wcbef-filter-form-content" class="wcbef-hide" data-visibility="hidden">
        <div class="wcbef-wrap">
            <ul class="wcbef-tabs-list" data-content-id="wcbef-bulk-edit-filter-tabs-contents">
                <li><a class="selected" data-content="bulk-edit-filter-general" href="#"><?php esc_html_e('General', WCBEF_NAME); ?></a></li>
                <li>
                    <a data-content="bulk-edit-filter-categories-tags-taxonomies" href="#">
                        <?php esc_html_e('Categories/Tags/Taxonomies', WCBEF_NAME); ?>
                    </a>
                </li>
                <li><a data-content="bulk-edit-filter-pricing" href="#"><?php esc_html_e('Pricing', WCBEF_NAME); ?></a></li>
                <li><a data-content="bulk-edit-filter-shipping" href="#"><?php esc_html_e('Shipping', WCBEF_NAME); ?></a></li>
                <li><a data-content="bulk-edit-filter-stock" href="#"><?php esc_html_e('Stock', WCBEF_NAME); ?></a></li>
                <li><a data-content="bulk-edit-filter-type" href="#"><?php esc_html_e('Type', WCBEF_NAME); ?></a></li>
                <li><a data-content="bulk-edit-filter-custom-fields" href="#"><?php esc_html_e('Custom Fields', WCBEF_NAME); ?></a></li>
            </ul>
            <div class="wcbef-tabs-contents" id="wcbef-bulk-edit-filter-tabs-contents">
                <div class="selected wcbef-tab-content-item" data-content="bulk-edit-filter-general">
                    <div class="wcbef-filters-form-group" data-name="product_ids">
                        <label for="wcbef-filter-form-product-ids"><?php esc_html_e('Product ID(s)', WCBEF_NAME); ?></label>
                        <select id="wcbef-filter-form-product-ids-operator" title="Select Operator" data-field="operator">
                            <option value="exact"><?php esc_html_e('Exact', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" id="wcbef-filter-form-product-ids" data-field="value" placeholder="<?php esc_html_e('for example: 1,2,3 or 1-10 or 1,2,3|10-20', WCBEF_NAME); ?>">
                        <label class="wcbef-ml10">
                            <input type="checkbox" id="wcbef-filter-form-product-ids-parent-only" value="yes">
                            <?php esc_html_e('Only Parent Products', WCBEF_NAME); ?>
                        </label>
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_title">
                        <label for="wcbef-filter-form-product-title"><?php esc_html_e('Product Title', WCBEF_NAME); ?></label>
                        <select id="wcbef-filter-form-product-title-operator" data-field="operator" title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>">
                            <option value="like"><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                            <option value="exact"><?php esc_html_e('Exact', WCBEF_NAME); ?></option>
                            <option value="not"><?php esc_html_e('Not', WCBEF_NAME); ?></option>
                            <option value="begin"><?php esc_html_e('Begin', WCBEF_NAME); ?></option>
                            <option value="end"><?php esc_html_e('End', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" id="wcbef-filter-form-product-title" data-field="value" placeholder="<?php esc_html_e('Product Title ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_content">
                        <label for="wcbef-filter-form-product-content"><?php esc_html_e('Product Content', WCBEF_NAME); ?></label>
                        <select id="wcbef-filter-form-product-content-operator" data-field="operator" title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>">
                            <option value="like"><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                            <option value="exact"><?php esc_html_e('Exact', WCBEF_NAME); ?></option>
                            <option value="not"><?php esc_html_e('Not', WCBEF_NAME); ?></option>
                            <option value="begin"><?php esc_html_e('Begin', WCBEF_NAME); ?></option>
                            <option value="end"><?php esc_html_e('End', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" id="wcbef-filter-form-product-content" data-field="value" placeholder="<?php esc_html_e('Product Content ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Product Excerpt', WCBEF_NAME); ?></label>
                        <select title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>" disabled="disabled">
                            <option value=""><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" placeholder="<?php esc_html_e('Product Excerpt ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Product Slug', WCBEF_NAME); ?></label>
                        <select title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>" disabled>
                            <option value=""><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" placeholder="<?php esc_html_e('Product Slug ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Product SKU', WCBEF_NAME); ?></label>
                        <select title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>" disabled>
                            <option value=""><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" placeholder="<?php esc_html_e('Product SKU ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Product URL', WCBEF_NAME); ?></label>
                        <select title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>" disabled>
                            <option value=""><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                        </select>
                        <input type="text" placeholder="<?php esc_html_e('Product URL ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Product Date', WCBEF_NAME); ?></label>
                        <input type="text" class="wcbef-input-ft" placeholder="<?php esc_html_e('Product Date From ...', WCBEF_NAME); ?>" disabled>
                        <input type="text" class="wcbef-input-ft" placeholder="<?php esc_html_e('Product Date To ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                </div>
                <div class="wcbef-tab-content-item" data-content="bulk-edit-filter-categories-tags-taxonomies">
                    <div class="wcbef-filters-form-group" data-name="product_categories">
                        <label for="wcbef-filter-form-product-categories"><?php esc_html_e('Categories', WCBEF_NAME); ?></label>
                        <select id="wcbef-filter-form-product-categories-operator" data-field="operator" title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>">
                            <option value="or"><?php esc_html_e('OR', WCBEF_NAME); ?></option>
                            <option value="and"><?php esc_html_e('AND', WCBEF_NAME); ?></option>
                            <option value="not_in"><?php esc_html_e('NOT IN', WCBEF_NAME); ?></option>
                        </select>
                        <select class="wcbef-select2" id="wcbef-filter-form-product-categories" data-field="value" multiple>
                            <?php if (!empty($categories)) : ?>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label for="wcbef-filter-form-product-tags" data-name="product_tags"><?php esc_html_e('Tags', WCBEF_NAME); ?></label>
                        <select id="wcbef-filter-form-product-tags-operator" data-field="operator" title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>">
                            <option value="or"><?php esc_html_e('OR', WCBEF_NAME); ?></option>
                            <option value="and"><?php esc_html_e('AND', WCBEF_NAME); ?></option>
                            <option value="not_in"><?php esc_html_e('NOT IN', WCBEF_NAME); ?></option>
                        </select>
                        <select class="wcbef-select2" id="wcbef-filter-form-product-tags" data-field="value" multiple>
                            <?php if (!empty($tags)) : ?>
                                <?php foreach ($tags as $tag) : ?>
                                    <option value="<?php echo esc_attr($tag->slug); ?>"><?php echo esc_html($tag->name); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <?php if (!empty($taxonomies)) : ?>
                        <?php foreach ($taxonomies as $name => $taxonomy) : ?>
                            <div class="wcbef-filters-form-group">
                                <label><?php echo esc_html($taxonomy['label']); ?></label>
                                <select title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>" disabled>
                                    <option><?php esc_html_e('OR', WCBEF_NAME); ?></option>
                                    <option><?php esc_html_e('AND', WCBEF_NAME); ?></option>
                                    <option><?php esc_html_e('NOT IN', WCBEF_NAME); ?></option>
                                </select>
                                <select class="wcbef-select2" multiple disabled>
                                    <option value="">select</option>
                                </select>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="wcbef-tab-content-item" data-content="bulk-edit-filter-pricing">
                    <div class="wcbef-filters-form-group" data-name="product_regular_price">
                        <label for="wcbef-filter-form-product-regular-price-from"><?php esc_html_e('Regular Price', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-regular-price-from" data-field="from" placeholder="<?php esc_html_e('Regular Price From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-regular-price-to" data-field="to" placeholder="<?php esc_html_e('Regular Price To ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_sale_price">
                        <label for="wcbef-filter-form-product-sale-price-from"><?php esc_html_e('Sale Price', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-sale-price-from" data-field="from" placeholder="<?php esc_html_e('Sale Price From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-sale-price-to" data-field="to" placeholder="<?php esc_html_e('Sale Price To ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Sale Price Date From', WCBEF_NAME); ?></label>
                        <input type="text" class="wcbef-input-md" placeholder="<?php esc_html_e('Sale Price Date From ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Sale Price Date To', WCBEF_NAME); ?></label>
                        <input type="text" class="wcbef-input-md" placeholder="<?php esc_html_e('Sale Price Date To ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                </div>
                <div class="wcbef-tab-content-item" data-content="bulk-edit-filter-shipping">
                    <div class="wcbef-filters-form-group" data-name="product_width">
                        <label for="wcbef-filter-form-product-width-from"><?php esc_html_e('Width', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-width-from" data-field="from" placeholder="<?php esc_html_e('Width From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-width-to" data-field="to" placeholder="<?php esc_html_e('Width To ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_height">
                        <label for="wcbef-filter-form-product-height-from"><?php esc_html_e('Height', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-height-from" data-field="from" placeholder="<?php esc_html_e('Height From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-height-to" data-field="to" placeholder="<?php esc_html_e('Height To ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_length">
                        <label for="wcbef-filter-form-product-length-from"><?php esc_html_e('Length', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-length-from" data-field="from" placeholder="<?php esc_html_e('Length From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-length-to" data-field="to" placeholder="<?php esc_html_e('Length To ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_weight">
                        <label for="wcbef-filter-form-product-weight-from"><?php esc_html_e('Weight', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-weight-from" data-field="from" placeholder="<?php esc_html_e('Weight From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-product-weight-to" data-field="to" placeholder="<?php esc_html_e('Weight To ...', WCBEF_NAME); ?>">
                    </div>
                </div>
                <div class="wcbef-tab-content-item" data-content="bulk-edit-filter-stock">
                    <div class="wcbef-filters-form-group" data-name="manage_stock">
                        <label for="wcbef-filter-form-manage-stock"><?php esc_html_e('Manage Stock', WCBEF_NAME); ?></label>
                        <select id="wcbef-filter-form-manage-stock" class="wcbef-input-md" data-field="value">
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                            <option value="yes"><?php esc_html_e('Yes', WCBEF_NAME); ?></option>
                            <option value="no"><?php esc_html_e('No', WCBEF_NAME); ?></option>
                        </select>
                    </div>
                    <div class="wcbef-filters-form-group" data-name="stock_quantity">
                        <label for="wcbef-filter-form-stock-quantity-from"><?php esc_html_e('Stock Quantity', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-stock-quantity-from" data-field="from" placeholder="<?php esc_html_e('Stock Quantity From ...', WCBEF_NAME); ?>">
                        <input type="number" class="wcbef-input-ft" id="wcbef-filter-form-stock-quantity-to" data-field="to" placeholder="<?php esc_html_e('Stock Quantity To ...', WCBEF_NAME); ?>">
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Stock Status', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" disabled>
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                        </select>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Backorders', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" disabled>
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                        </select>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                </div>
                <div class="wcbef-tab-content-item" data-content="bulk-edit-filter-type">
                    <div class="wcbef-filters-form-group" data-name="product_type">
                        <label for="wcbef-filter-form-product-type"><?php esc_html_e('Product Type', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" id="wcbef-filter-form-product-type" data-field="value">
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                            <?php if (!empty($product_types)) : ?>
                                <?php foreach ($product_types as $product_type_name => $product_type_label) : ?>
                                    <option value="<?php echo esc_attr($product_type_name); ?>"><?php echo esc_html($product_type_label); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="wcbef-filters-form-group" data-name="product_status">
                        <label for="wcbef-filter-form-product-status"><?php esc_html_e('Product Status', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" id="wcbef-filter-form-product-status" data-field="value">
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                            <?php if (!empty($product_statuses)) : ?>
                                <?php foreach ($product_statuses as $product_status_name => $product_status_label) : ?>
                                    <option value="<?php echo esc_attr($product_status_name); ?>"><?php echo esc_html($product_status_label); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Featured', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" disabled>
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                        </select>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Downloadable', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" disabled>
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                        </select>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Sold Individually', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" disabled>
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                        </select>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group" data-name="author">
                        <label for="wcbef-filter-form-author"><?php esc_html_e('By Author', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" id="wcbef-filter-form-author" data-field="value">
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                            <?php if (!empty($users)) : ?>
                                <?php foreach ($users as $user) : ?>
                                    <option value="<?php echo esc_attr($user->ID); ?>"><?php echo esc_html($user->user_login); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Catalog Visibility', WCBEF_NAME); ?></label>
                        <select class="wcbef-input-md" disabled>
                            <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                        </select>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                    <div class="wcbef-filters-form-group">
                        <label><?php esc_html_e('Menu Order', WCBEF_NAME); ?></label>
                        <input type="number" class="wcbef-input-ft" placeholder="<?php esc_html_e('Menu Order From ...', WCBEF_NAME); ?>" disabled>
                        <input type="number" class="wcbef-input-ft" placeholder="<?php esc_html_e('Menu Order To ...', WCBEF_NAME); ?>" disabled>
                        <span class="wcbef-short-description">Upgrade to pro version</span>
                    </div>
                </div>
                <div class="wcbef-tab-content-item" data-content="bulk-edit-filter-custom-fields">
                    <?php if (!empty($meta_fields)) : ?>
                        <?php foreach ($meta_fields as $custom_field) : ?>
                            <?php $field_id = "wcbef-filter-form-custom-field-" . esc_attr($custom_field['key']) . ""; ?>
                            <div class="wcbef-filters-form-group" data-type="custom_fields" data-taxonomy="<?php echo esc_attr($custom_field['key']); ?>">
                                <label><?php echo esc_html($custom_field['title']); ?></label>
                                <?php if (in_array($custom_field['main_type'], \wcbef\classes\repositories\Meta_Field::get_fields_name_have_operator()) || ($custom_field['main_type'] == \wcbef\classes\repositories\Meta_Field::TEXTINPUT && $custom_field['sub_type'] == \wcbef\classes\repositories\Meta_Field::STRING_TYPE)) : ?>
                                    <select title="<?php esc_html_e('Select Operator', WCBEF_NAME); ?>" data-field="operator">
                                        <option value="like"><?php esc_html_e('Like', WCBEF_NAME); ?></option>
                                        <option value="exact"><?php esc_html_e('Exact', WCBEF_NAME); ?></option>
                                        <option value="not"><?php esc_html_e('Not', WCBEF_NAME); ?></option>
                                        <option value="begin"><?php esc_html_e('Begin', WCBEF_NAME); ?></option>
                                        <option value="end"><?php esc_html_e('End', WCBEF_NAME); ?></option>
                                    </select>
                                    <input type="text" data-field="value" id="<?php echo esc_attr($field_id); ?>" placeholder="<?php echo esc_attr($custom_field['title']); ?> ..." title="<?php echo esc_attr($custom_field['title']); ?>" <?php if ($custom_field['main_type'] == \wcbef\classes\repositories\Meta_Field::CALENDAR) : ?> class="wcbef-datepicker" <?php endif; ?>>
                                <?php elseif ($custom_field['main_type'] == \wcbef\classes\repositories\Meta_Field::TEXTINPUT && $custom_field['sub_type'] == \wcbef\classes\repositories\Meta_Field::NUMBER) : ?>
                                    <input type="number" class="wcbef-input-md" data-field="from" data-field-type="number" id="<?php echo esc_attr($field_id) . '-from'; ?>" title="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('From', WCBEF_NAME); ?>" placeholder="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('From ...', WCBEF_NAME); ?>">
                                    <input type="number" class="wcbef-input-md" id="<?php echo esc_attr($field_id) . '-to'; ?>" data-field-type="number" title="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('To', WCBEF_NAME); ?>" data-field="to" placeholder="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('To ...', WCBEF_NAME); ?>">
                                <?php elseif ($custom_field['main_type'] == \wcbef\classes\repositories\Meta_Field::CHECKBOX) : ?>
                                    <select id="<?php echo esc_attr($field_id); ?>" data-field="value" title="<?php esc_html_e('Select', WCBEF_NAME); ?> <?php echo esc_attr($custom_field['title']); ?>">
                                        <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                                        <option value="yes"><?php esc_html_e('Yes', WCBEF_NAME); ?></option>
                                        <option value="no"><?php esc_html_e('No', WCBEF_NAME); ?></option>
                                    </select>
                                <?php elseif ($custom_field['main_type'] == \wcbef\classes\repositories\Meta_Field::CALENDAR) : ?>
                                    <input type="text" class="wcbef-input-md wcbef-datepicker" data-field="from" data-field-type="date" id="<?php echo esc_attr($field_id) . '-from'; ?>" title="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('From', WCBEF_NAME); ?>" placeholder="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('From ...', WCBEF_NAME); ?>">
                                    <input type="text" class="wcbef-input-md wcbef-datepicker" data-field="to" data-field-type="date" id="<?php echo esc_attr($field_id) . '-to'; ?>" title="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('To', WCBEF_NAME); ?>" placeholder="<?php echo esc_attr($custom_field['title']); ?> <?php esc_html_e('To ...', WCBEF_NAME); ?>">
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="wcbef-alert wcbef-alert-warning">
                            <span><?php esc_html_e('There is not any added Meta Fields, You can add new Meta Fields trough "Meta Fields" tab.', WCBEF_NAME); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="wcbef-tab-footer">
                <div class="wcbef-tab-footer-left">
                    <button type="button" class="wcbef-button wcbef-button-lg wcbef-button-blue wcbef-filter-form-action" data-search-action="pro_search">
                        <?php esc_html_e('Get products', WCBEF_NAME); ?>
                    </button>
                    <button type="button" class="wcbef-button wcbef-button-lg wcbef-button-white" id="wcbef-filter-form-reset">
                        <?php esc_html_e('Reset Filters', WCBEF_NAME); ?>
                    </button>
                </div>
                <div class="wcbef-tab-footer-right">
                    <input type="text" name="save_filter" id="wcbef-filter-form-save-preset-name" placeholder="Filter Name ..." class="wcbef-h50" title="Filter Name">
                    <button type="button" id="wcbef-filter-form-save-preset" class="wcbef-button wcbef-button-lg wcbef-button-blue">
                        <?php esc_html_e('Save Profile', WCBEF_NAME); ?>
                    </button>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="wcbef-filter-form-button">
        <a class="wcbef-filter-form-toggle">
            <span class="lni lni-funnel wcbef-mr5"></span>
            <?php esc_html_e('Filter Form', WCBEF_NAME); ?>
            <span class="lni lni-chevron-down wcbef-ml5 wcbef-filter-form-icon"></span>
        </a>
    </div>
</div>