<div class="wcbef-modal" id="wcbef-modal-filter-profiles">
    <div class="wcbef-modal-container">
        <div class="wcbef-modal-box wcbef-modal-box-lg">
            <div class="wcbef-modal-content">
                <div class="wcbef-modal-title">
                    <h2><?php esc_html_e('Filter Profiles', WCBEF_NAME); ?></h2>
                    <button type="button" class="wcbef-modal-close" data-toggle="modal-close">
                        <i class="lni lni-close"></i>
                    </button>
                </div>
                <div class="wcbef-modal-body">
                    <div class="wcbef-wrap">
                        <div class="wcbef-filter-profiles-items wcbef-pb30">
                            <div class="wcbef-table-border-radius">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><?php esc_html_e('Profile Name', WCBEF_NAME); ?></th>
                                            <th><?php esc_html_e('Date Modified', WCBEF_NAME); ?></th>
                                            <th><?php esc_html_e('Use Always', WCBEF_NAME); ?></th>
                                            <th><?php esc_html_e('Actions', WCBEF_NAME); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($filters_preset)) : ?>
                                            <?php foreach ($filters_preset as $filter_item) : ?>
                                                <?php include "filter_profile_item.php"; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>