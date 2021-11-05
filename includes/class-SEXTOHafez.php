<?php
/** Prevent this file from being accessed directly */
if (!defined('ABSPATH')) {
    die("Direct access of plugin files is not allowed.");
}

/**
 * Class SEXTOHafez
 */
class SEXTOHafez {
    public $plugin_path = "";

    public $plugin_url = "";

    /**
     * SEXTOHafez constructor.
     */
    public function __construct() {
        $this->plugin_path = SEXTOHafez_PLUGIN_DIRECTORY;
        $this->plugin_url  = SEXTOHafez_PLUGIN_URL;

        $this->includes();
        $this->init_hooks();
    }

    /**
     * Initial plugin setup.
     */
    private function init_hooks(): void {
        register_activation_hook(
            SEXTOHafez_PLUGIN_FILE,
            ['\SEXTOHafez\Install', 'install']
        );

        add_action('init', [$this, 'load_textdomain']);
    }

    /**
     * Load plugin textdomain.
     */
    public function load_textdomain(): void {
       
        load_plugin_textdomain(
            SEXTOHafez_PLUGIN_TEXTDOMAIN,
            false,
            SEXTOHafez_PLUGIN_DIRECTORY . "/languages"
        );
    }

    /**
     * Includes classes and functions.
     */
    public function includes(): void {
        require_once $this->plugin_path . 'includes/class-SEXTOHafez-install.php';

        if (is_admin()) {
            require_once $this->plugin_path . 'includes/admin/class-SEXTOHafez-admin.php';
         //   require_once $this->plugin_path . 'includes/admin/class-SEXTOHafez-create.php';
        }
        else {
            require_once $this->plugin_path . 'includes/class-SEXTOHafez-public.php';
        }

        require_once $this->plugin_path . 'includes/class-SEXTOHafez-public.php';
    }
}
