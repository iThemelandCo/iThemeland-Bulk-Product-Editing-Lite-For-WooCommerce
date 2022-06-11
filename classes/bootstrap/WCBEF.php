<?php

namespace wcbef\classes\bootstrap;

use wcbef\classes\controllers\WCBEF_Ajax;
use wcbef\classes\controllers\WCBEF_Post;
use wcbef\classes\controllers\Woocommerce_Bulk_Edit_Free;
use wcbef\classes\repositories\Column;
use wcbef\classes\repositories\Search;
use wcbef\classes\repositories\Setting;

class WCBEF
{
    private static $instance = null;

    public static function init()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
    }

    private function __construct()
    {
        if (!current_user_can('manage_woocommerce')) {
            return;
        }
        add_action('admin_menu', [$this, 'add_menu']);
        add_action('admin_enqueue_scripts', [$this, 'load_assets']);
        WCBEF_Ajax::register_callback();
        WCBEF_Post::register_callback();
        (new WCBEF_Meta_Fields())->init();
        (new WCBEF_Custom_Queries())->init();
    }

    public static function wc_required()
    {
        include WCBEF_VIEWS_DIR . 'alerts/wc_required.php';
    }

    public static function wcbef_wp_init()
    {
        // Session start
        if (!session_id()) {
            session_start();
        }

        // load textdomain
        load_plugin_textdomain('woocommerce-bulk-edit-free', false, WCBEF_LANGUAGES_DIR);
    }

    public function add_menu()
    {
        add_menu_page(esc_html__('Woo Bulk Editor', WCBEF_NAME), esc_html__('Woo Bulk Editor', WCBEF_NAME), 'manage_woocommerce', 'wcbef', [new Woocommerce_Bulk_Edit_Free(), 'index'], WCBEF_IMAGES_URL . 'wcbef_icon.svg', 2);
    }

    public function load_assets($page)
    {
        if ($page === "toplevel_page_wcbef") {
            // Styles
            wp_enqueue_style('wcbef-reset', WCBEF_CSS_URL . 'reset.css');
            wp_enqueue_style('wcbef-LineIcons', WCBEF_CSS_URL . 'LineIcons.min.css');
            wp_enqueue_style('wcbef-datepicker', WCBEF_CSS_URL . 'bootstrap-material-datetimepicker.css');
            wp_enqueue_style('wcbef-select2', WCBEF_CSS_URL . 'select2.min.css');
            wp_enqueue_style('wcbef-sweetalert', WCBEF_CSS_URL . 'sweetalert.css');
            wp_enqueue_style('wcbef-jquery_ui', WCBEF_CSS_URL . 'jquery-ui.min.css');
            wp_enqueue_style('wcbef-tipsy', WCBEF_CSS_URL . 'jquery.tipsy.css');
            wp_enqueue_style('wcbef-scrollbar', WCBEF_CSS_URL . 'jquery.scrollbar.css');
            wp_enqueue_style('wcbef-main', WCBEF_CSS_URL . 'style.css');
            wp_enqueue_style('wp-color-picker');

            // Scripts
            wp_enqueue_script('wcbef-functions', WCBEF_JS_URL . 'functions.js', ['jquery'], '1.0.1');
            wp_enqueue_script('wcbef-select2', WCBEF_JS_URL . 'select2.min.js', ['jquery']);
            wp_enqueue_script('wcbef-moment', WCBEF_JS_URL . 'moment-with-locales.min.js', ['jquery']);
            wp_enqueue_script('wcbef-tipsy', WCBEF_JS_URL . 'jquery.tipsy.js', ['jquery']);
            wp_enqueue_script('wcbef-scrollbar', WCBEF_JS_URL . 'jquery.scrollbar.min.js', ['jquery']);
            wp_enqueue_script('wcbef-bootstrap_datepicker', WCBEF_JS_URL . 'bootstrap-material-datetimepicker.js', ['jquery']);
            wp_enqueue_script('wcbef-sweetalert', WCBEF_JS_URL . 'sweetalert.min.js', ['jquery']);
            wp_enqueue_script('wcbef-main', WCBEF_JS_URL . 'main.js', ['jquery', 'jquery-ui-sortable', 'wp-color-picker', 'wcbef-functions'], '6.0');
            wp_localize_script('wcbef-main', 'WCBEF_DATA', [
                'ajax_url' => admin_url('admin-ajax.php'),
                'wp_nonce' => wp_create_nonce(),
            ]);
            wp_enqueue_media();
            wp_enqueue_editor();
            wp_enqueue_script('jquery-ui-sortable');
            wp_enqueue_script('jquery-ui-datepicker');
        }
    }

    public static function activate()
    {
        // set plugin version
        update_option('wcbef_version', WCBEF_VERSION);

        // set default settings
        if (!get_option('wcbef_settings')) {
            (new Setting())->update();
        }

        // set default column profile
        if (!(get_option('wcbef_column_fields'))) {
            (new Column())->set_default_fields();
        }

        // set default filter profile
        if (!(get_option('wcbef_filter_profile'))) {
            (new Search())->set_default_item();
        }

        self::create_tables();
    }

    private static function create_tables()
    {
        global $wpdb;
        $history_table_name = $wpdb->prefix . 'wcbef_history';
        $history_items_table_name = $wpdb->prefix . 'wcbef_history_items';
        $query = '';
        $history_table = $wpdb->prepare('SHOW TABLES LIKE %s', $wpdb->esc_like($history_table_name));
        if (!$wpdb->get_var($history_table) == $history_table_name) {
            $query .= "CREATE TABLE {$history_table_name} (
                  id int(11) NOT NULL AUTO_INCREMENT,
                  user_id int(11) NOT NULL,
                  fields text NOT NULL,
                  operation_type varchar(32) NOT NULL,
                  operation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                  reverted tinyint(1) NOT NULL DEFAULT '0',
                  PRIMARY KEY (id),
                  INDEX (user_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        }

        $history_items_table = $wpdb->prepare('SHOW TABLES LIKE %s', $wpdb->esc_like($history_items_table_name));
        if (!$wpdb->get_var($history_items_table) == $history_items_table_name) {
            $query .= "CREATE TABLE {$history_items_table_name} (
                      id int(11) NOT NULL AUTO_INCREMENT,
                      history_id int(11) NOT NULL,
                      product_id int(11) NOT NULL,
                      field varchar(255) NOT NULL,
                      prev_value longtext,
                      new_value longtext,
                      PRIMARY KEY (id),
                      INDEX (history_id),
                      INDEX (product_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        }

        if (!empty($query)) {
            require_once(ABSPATH . '/wp-admin/includes/upgrade.php');
            dbDelta($query);
        }
    }

    public static function deactivate()
    {
        unset($_SESSION['wcbef_active_columns']);
        unset($_SESSION['wcbef_active_columns_key']);
    }
}
