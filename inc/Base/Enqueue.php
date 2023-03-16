<?php
/**
 * @package  AlecadddPlugin
*/
namespace Inc\Base; 
use Inc\Base\BaseController;

class Enqueue extends BaseController

{
    public function register() 
    {
        add_action( 'admin_enqueue_scripts', [$this, 'enqueue'] );
    }

    function enqueue()
    {
        wp_enqueue_style('admin_style', $this->plugin_url . '/assets/css/admin.css');
    }
}
