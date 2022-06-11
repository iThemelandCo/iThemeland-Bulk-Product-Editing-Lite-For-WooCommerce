<?php $industries = wcbef\classes\helpers\Industry_Helper::get_industries(); ?>

<div id="wcbef-body">
    <div class="wcbef-dashboard-body">
        <div id="wcbef-activation">
            <?php if (isset($is_active) && $is_active === true && $activation_skipped !== true) : ?>
                <div class="wcbef-wrap">
                    <div class="wcbef-tab-middle-content">
                        <div id="wcbef-activation-info">
                            <strong><?php esc_html_e("Congratulations, Your plugin is activated successfully. Let's Go!", WCBEF_NAME) ?></strong>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="wcbef-wrap wcbef-activation-form">
                    <div class="wcbef-tab-middle-content">
                        <?php if (!empty($flush_message) && is_array($flush_message)) : ?>
                            <div class="wcbef-alert <?php echo ($flush_message['message'] == "Success !") ? "wcbef-alert-success" : "wcbef-alert-danger"; ?>">
                                <span><?php echo sanitize_text_field($flush_message['message']); ?></span>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" id="wcbef-activation-form">
                            <h3 class="wcbef-activation-top-alert">Fill the below form to get the latest updates' news and <strong style="text-decoration: underline;">Special Offers(Discount)</strong>, Otherwise, Skip it!</h3>
                            <input type="hidden" name="action" value="wcbef_activation_plugin">
                            <div class="wcbef-activation-field">
                                <label for="wcbef-activation-email"><?php esc_html_e('Email', WCBEF_NAME); ?> </label>
                                <input type="email" name="email" placeholder="Email ..." id="wcbef-activation-email">
                            </div>
                            <div class="wcbef-activation-field">
                                <label for="wcbef-activation-industry"><?php esc_html_e('What is your industry?', WCBEF_NAME); ?> </label>
                                <select name="industry" id="wcbef-activation-industry">
                                    <option value=""><?php esc_html_e('Select', WCBEF_NAME); ?></option>
                                    <?php
                                    if (!empty($industries)) :
                                        foreach ($industries as $industry_key => $industry_label) :
                                    ?>
                                            <option value="<?php echo esc_attr($industry_key); ?>"><?php echo esc_attr($industry_label); ?></option>
                                    <?php
                                        endforeach;
                                    endif
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="activation_type" id="wcbef-activation-type" value="">
                            <button type="button" id="wcbef-activation-activate" class="wcbef-button wcbef-button-lg wcbef-button-blue" value="1"><?php esc_html_e('Activate', WCBEF_NAME); ?></button>
                            <button type="button" id="wcbef-activation-skip" class="wcbef-button wcbef-button-lg wcbef-button-gray" style="float: left;" value="skip"><?php esc_html_e('Skip', WCBEF_NAME); ?></button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>