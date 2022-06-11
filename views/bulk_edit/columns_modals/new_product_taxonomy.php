<div class="wcbef-modal" id="wcbef-modal-new-product-taxonomy">
    <div class="wcbef-modal-container">
        <div class="wcbef-modal-box wcbef-modal-box-sm">
            <div class="wcbef-modal-content">
                <div class="wcbef-modal-title">
                    <h2><?php esc_html_e('New Product Taxonomy', WCBEF_NAME); ?> - <span id="wcbef-modal-new-product-taxonomy-product-title" class="wcbef-modal-product-title"></span></h2>
                    <button type="button" class="wcbef-modal-close" data-toggle="modal-close">
                        <i class="lni lni-close"></i>
                    </button>
                </div>
                <div class="wcbef-modal-body">
                    <div class="wcbef-wrap">
                        <div class="wcbef-filters-form-group">
                            <div class="wcbef-new-product-taxonomy-form-group">
                                <label for="wcbef-new-product-taxonomy-name"><?php esc_html_e('Name', WCBEF_NAME); ?></label>
                                <input type="text" id="wcbef-new-product-taxonomy-name" placeholder="<?php esc_html_e('Taxonomy Name ...', WCBEF_NAME); ?>">
                            </div>
                            <div class="wcbef-new-product-taxonomy-form-group">
                                <label for="wcbef-new-product-taxonomy-slug"><?php esc_html_e('Slug', WCBEF_NAME); ?></label>
                                <input type="text" id="wcbef-new-product-taxonomy-slug" placeholder="<?php esc_html_e('Taxonomy Slug ...', WCBEF_NAME); ?>">
                            </div>
                            <div class="wcbef-new-product-taxonomy-form-group">
                                <label for="wcbef-new-product-taxonomy-parent"><?php esc_html_e('Parent', WCBEF_NAME); ?></label>
                                <select id="wcbef-new-product-taxonomy-parent">
                                    <option value="-1"><?php esc_html_e('None', WCBEF_NAME); ?></option>
                                </select>
                            </div>
                            <div class="wcbef-new-product-taxonomy-form-group">
                                <label for="wcbef-new-product-taxonomy-description"><?php esc_html_e('Description', WCBEF_NAME); ?></label>
                                <textarea id="wcbef-new-product-taxonomy-description" rows="8" placeholder="<?php esc_html_e('Description ...', WCBEF_NAME) ?>"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wcbef-modal-footer">
                    <button type="button" class="wcbef-button wcbef-button-blue" id="wcbef-create-new-product-taxonomy">
                        <?php esc_html_e('Create', WCBEF_NAME); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>