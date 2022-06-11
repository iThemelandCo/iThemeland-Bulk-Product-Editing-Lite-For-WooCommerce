<div id="wcbef-main">
    <div id="wcbef-loading" class="wcbef-loading">
        <?php esc_html_e('Loading ...', WCBEF_NAME) ?>
    </div>
    <div id="wcbef-header">
        <div class="wcbef-plugin-title">
            <div class="wcbef-plugin-name">
                <img src="<?php echo WCBEF_IMAGES_URL . 'wcbef_icon_original.svg'; ?>" alt="">
                <span><?php esc_html_e('WooCommerce Bulk Product Editor', WCBEF_NAME); ?></span>
                <strong>Lite</strong>
            </div>
            <span class="wcbef-plugin-description"><?php esc_html_e("Be professionals with managing data in the reliable and flexible way!", WCBEF_NAME); ?></span>
        </div>
        <div class="wcbef-header-left">
            <div class="wcbef-plugin-help">
                <span>
                    <a href="https://ithemelandco.com/Plugins/Documentations/Pro-Bulk-Editing/woocommerce-bulk-product-editing/documentation.pdf"><strong class="wcbef-plugin-help-text"><?php esc_html_e('Need Help', WCBEF_NAME); ?></strong> <i class="lni-help"></i></a>
                </span>
            </div>
            <div class="wcbef-full-screen" id="wcbef-full-screen">
                <span><i class="lni lni-frame-expand"></i></span>
            </div>
            <div class="wcbef-upgrade" id="wcbef-upgrade">
                <a href="<?php echo esc_url(WCBEF_UPGRADE_URL); ?>"><?php echo esc_html(WCBEF_UPGRADE_TEXT); ?></a>
            </div>
        </div>
    </div>
    <div id="wcbef-body">
        <div class="wcbef-tabs wcbef-tabs-main">
            <div class="wcbef-tabs-navigation">
                <nav class="wcbef-tabs-navbar">
                    <ul class="wcbef-tabs-list" data-content-id="wcbef-main-tabs-contents">
                        <li>
                            <a class="wcbef-ml45 <?php echo (isset($current_tab) && ($current_tab == 'bulk-edit')) ? 'selected' : '' ?>" data-content="bulk-edit" data-type="main-tab" href="#" <?php echo (!isset($is_active) || $is_active === false) ? "data-disabled='true'" : "data-disabled='false'"; ?>><?php esc_html_e('Bulk Edit', WCBEF_NAME); ?></a>
                        </li>
                        <li>
                            <a data-content="column-manager" href="#" data-type="main-tab" class="<?php echo (isset($current_tab) && ($current_tab == 'column-manager')) ? 'selected' : ''; ?>" <?php echo (!isset($is_active) || $is_active === false) ? "data-disabled='true'" : "data-disabled='false'"; ?>>
                                <?php esc_html_e('Column Manager', WCBEF_NAME); ?>
                            </a>
                        </li>
                        <li>
                            <a data-content="meta-fields" href="#" data-type="main-tab" class="<?php echo (isset($current_tab) && ($current_tab == 'meta-fields')) ? 'selected' : ''; ?>" <?php echo (!isset($is_active) || $is_active === false) ? "data-disabled='true'" : "data-disabled='false'"; ?>>
                                <?php esc_html_e('Meta Fields', WCBEF_NAME); ?>
                            </a>
                        </li>
                        <li>
                            <a data-content="history" href="#" data-type="main-tab" class="<?php echo (isset($current_tab) && ($current_tab == 'history')) ? 'selected' : ''; ?>" <?php echo (!isset($is_active) || $is_active === false) ? "data-disabled='true'" : "data-disabled='false'"; ?>>
                                <?php esc_html_e('History', WCBEF_NAME); ?>
                            </a>
                        </li>
                        <li>
                            <a data-content="import-export" href="#" data-type="main-tab" class="<?php echo (isset($current_tab) && ($current_tab == 'import-export')) ? 'selected' : ''; ?>" <?php echo (!isset($is_active) || $is_active === false) ? "data-disabled='true'" : "data-disabled='false'"; ?>>
                                <?php esc_html_e('Import/Export', WCBEF_NAME); ?>
                            </a>
                        </li>
                        <li>
                            <a data-content="settings" href="#" data-type="main-tab" class="<?php echo (isset($current_tab) && ($current_tab == 'settings')) ? 'selected' : ''; ?>" <?php echo (!isset($is_active) || $is_active === false) ? "data-disabled='true'" : "data-disabled='false'"; ?>>
                                <?php esc_html_e('Settings', WCBEF_NAME); ?>
                            </a>
                        </li>
                        <li>
                            <a data-content="activation" href="#" data-type="main-tab" class="<?php echo (isset($current_tab) && ($current_tab == 'activation')) ? 'selected' : ''; ?>">
                                <?php esc_html_e('Activation', WCBEF_NAME); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="wcbef-tabs-contents" id="wcbef-main-tabs-contents">
                <?php if (isset($is_active) && $is_active === true) : ?>
                    <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && $current_tab == 'bulk-edit') ? 'selected' : ''; ?>" data-content="bulk-edit">
                        <?php include_once "bulk_edit/main.php"; ?>
                    </div>
                    <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && ($current_tab == 'column-manager')) ? 'selected' : ''; ?>" data-content="column-manager">
                        <?php include_once "column_manager/main.php"; ?>
                    </div>
                    <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && ($current_tab == 'meta-fields')) ? 'selected' : ''; ?>" data-content="meta-fields">
                        <?php include_once "meta_fields/main.php"; ?>
                    </div>
                    <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && ($current_tab == 'history')) ? 'selected' : ''; ?>" data-content="history">
                        <?php include_once "history/main.php"; ?>
                    </div>
                    <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && ($current_tab == 'import-export')) ? 'selected' : ''; ?>" data-content="import-export">
                        <?php include_once "import_export/main.php"; ?>
                    </div>
                    <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && ($current_tab == 'settings')) ? 'selected' : ''; ?>" data-content="settings">
                        <?php include_once "settings/main.php"; ?>
                    </div>
                <?php endif; ?>
                <div class="wcbef-tab-content-item <?php echo (isset($current_tab) && ($current_tab == 'activation')) ? 'selected' : ''; ?>" data-content="activation">
                    <?php include_once "activation/main.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>