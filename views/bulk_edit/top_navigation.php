<div class="wcbef-top-nav">
    <div class="wcbef-top-nav-buttons" id="wcbef-bulk-edit-navigation">
        <div class="wcbef-top-nav-buttons-group">
            <button type="button" id="wcbef-bulk-edit-bulk-edit-btn" data-toggle="modal" data-target="#wcbef-modal-bulk-edit" class="wcbef-button-blue" data-fetch-product="<?php echo esc_attr($settings['fetch_product_in_bulk']); ?>">
                <?php esc_html_e('Bulk Edit', WCBEF_NAME); ?>
            </button>
            <button type="button" class="wcbef-bulk-edit-variations" data-toggle="modal" data-target="#wcbef-modal-variation-bulk-edit">
                <?php esc_html_e('Variations', WCBEF_NAME); ?>
            </button>
        </div>
        <div class="wcbef-top-nav-buttons-border"></div>
        <div class="wcbef-top-nav-buttons-group">
            <button type="button" data-toggle="modal" data-target="#wcbef-modal-column-profiles">
                <?php esc_html_e('Column Profile', WCBEF_NAME); ?>
            </button>
            <button type="button" data-toggle="modal" data-target="#wcbef-modal-filter-profiles">
                <?php esc_html_e('Filter Profiles', WCBEF_NAME); ?>
            </button>
            <?php $visibility = (!empty($filter_profile_use_always) && $filter_profile_use_always != 'default') ? "display:block" : "display:none"; ?>
            <button type="button" id="wcbef-bulk-edit-reset-filter" class="wcbef-button-blue" <?php echo 'style="' . esc_attr($visibility) . '"'; ?>>
                <?php esc_html_e('Reset Filter', WCBEF_NAME); ?>
            </button>
        </div>
        <div class="wcbef-top-nav-buttons-border"></div>
        <div class="wcbef-top-nav-buttons-group">
            <button type="button" title="Undo latest history" class="wcbef-button-blue" disabled="disabled">
                <?php esc_html_e('Undo', WCBEF_NAME); ?>
            </button>
            <button type="button" title="Redo" class="wcbef-button-blue" disabled="disabled">
                <?php esc_html_e('Redo', WCBEF_NAME); ?>
            </button>
            <button type="button" data-toggle="modal" data-target="#wcbef-modal-new-product"><?php esc_html_e('New Product', WCBEF_NAME); ?></button>
        </div>
        <div class="wcbef-top-nav-buttons-border"></div>
        <div class="wcbef-bulk-edit-form-select-tools">
            <div class="wcbef-top-nav-buttons-group">
                <button type="button" id="wcbef-bulk-edit-unselect"><?php esc_html_e('Unselect', WCBEF_NAME); ?></button>
                <button type="button" id="wcbef-bulk-edit-duplicate" data-toggle="modal" data-target="#wcbef-modal-product-duplicate"><?php esc_html_e('Duplicate', WCBEF_NAME); ?>
                </button>
                <div class="wcbef-bulk-edit-delete-product">
                    <span>
                        <?php esc_html_e('Delete', WCBEF_NAME); ?>
                        <i class="lni lni-chevron-down"></i>
                    </span>
                    <div class="wcbef-bulk-edit-delete-product-buttons" style="display: none;">
                        <ul>
                            <li class="wcbef-bulk-edit-delete-action" data-delete-type="trash">
                                <?php esc_html_e('Move to trash', WCBEF_NAME); ?>
                            </li>
                            <li class="wcbef-bulk-edit-delete-action" data-delete-type="permanently">
                                <?php esc_html_e('Permanently', WCBEF_NAME); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wcbef-top-nav-buttons-border"></div>
        </div>
        <div class="wcbef-top-nav-buttons-group">
            <label>
                <input type="checkbox" id="wcbef-bulk-edit-show-variations">
                <?php esc_html_e('Variation', WCBEF_NAME); ?>
                <i title="In this mode, all of variations will be appear below <br> the Variable products in separate rows." class="dashicons dashicons-info"></i>
            </label>
            <label id="wcbef-bulk-edit-select-all-variations-tools">
                <input type="checkbox" id="wcbef-bulk-edit-select-all-variations">
                <?php esc_html_e('Select All Variations', WCBEF_NAME); ?>
            </label>
            <label>
                <input type="checkbox" id="wcbef-inline-edit-bind">
                <?php esc_html_e('Bind Edit', WCBEF_NAME); ?>
                <i title="Set the value of edited product to all selected products" class="dashicons dashicons-info"></i>
            </label>
        </div>
    </div>
    <div class="wcbef-top-nav-filters">
        <div class="wcbef-top-nav-filters-left">
            <div class="wcbef-top-nav-filters-per-page">
                <select id="wcbef-quick-per-page" title="The number of products per page">
                    <?php foreach (\wcbef\classes\helpers\Setting::get_count_per_page_items() as $count_per_page_item) : ?>
                        <option value="<?php echo intval(esc_attr($count_per_page_item)); ?>" <?php if (\wcbef\classes\helpers\Session::has('wcbef_count_per_page') && \wcbef\classes\helpers\Session::get('wcbef_count_per_page') == intval($count_per_page_item)) : ?> selected <?php endif; ?>>
                            <?php echo esc_html($count_per_page_item); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php if (isset($settings['show_quick_search']) && $settings['show_quick_search'] == 'yes') : ?>
                <div class="wcbef-top-nav-filters-search">
                    <input type="text" id="wcbef-quick-search-text" placeholder="<?php esc_html_e('Quick Search ...', WCBEF_NAME); ?>" title="Quick Search" value="<?php echo (isset($_GET['wcbef-search-text'])) ? esc_html($_GET['wcbef-search-text']) : '' ?>">
                    <select id="wcbef-quick-search-field" title="Select Field">
                        <option value="title" <?php echo (isset($_GET['wcbef-search-field']) && $_GET['wcbef-search-field'] == 'title') ? 'selected' : '' ?>>
                            <?php esc_html_e('Title', WCBEF_NAME); ?>
                        </option>
                        <option value="id" <?php echo (isset($_GET['wcbef-search-field']) && $_GET['wcbef-search-field'] == 'id') ? 'selected' : '' ?>>
                            <?php esc_html_e('ID', WCBEF_NAME); ?>
                        </option>
                    </select>
                    <select id="wcbef-quick-search-operator" title="Select Operator">
                        <option value="like" <?php echo (isset($_GET['wcbef-search-operator']) && $_GET['wcbef-search-operator'] == 'like') ? 'selected' : '' ?>>
                            <?php esc_html_e('Like', WCBEF_NAME); ?>
                        </option>
                        <option value="exact" <?php echo (isset($_GET['wcbef-search-operator']) && $_GET['wcbef-search-operator'] == 'exact') ? 'selected' : '' ?>>
                            <?php esc_html_e('Exact', WCBEF_NAME); ?>
                        </option>
                        <option value="not" <?php echo (isset($_GET['wcbef-search-operator']) && $_GET['wcbef-search-operator'] == 'not') ? 'selected' : '' ?>>
                            <?php esc_html_e('Not', WCBEF_NAME); ?>
                        </option>
                        <option value="begin" <?php echo (isset($_GET['wcbef-search-operator']) && $_GET['wcbef-search-operator'] == 'begin') ? 'selected' : '' ?>>
                            <?php esc_html_e('Begin', WCBEF_NAME); ?>
                        </option>
                        <option value="end" <?php echo (isset($_GET['wcbef-search-operator']) && $_GET['wcbef-search-operator'] == 'end') ? 'selected' : '' ?>>
                            <?php esc_html_e('End', WCBEF_NAME); ?>
                        </option>
                    </select>
                    <button type="button" id="wcbef-quick-search-button" class="wcbef-filter-form-action" data-search-action="quick_search">
                        <i class="lni lni-funnel"></i>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <div class="wcbef-products-pagination">
            <?php include 'pagination.php'; ?>
        </div>
    </div>
</div>