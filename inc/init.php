<?php
/**
 * @package  AlecadddPlugin
*/
namespace Inc;

final class Init 
{
    function __construct() {
        echo 'Init file initialized!';
    }

    // Get all services and return list of class array
    public static function get_services() 
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
        ];
    }

    public static function register_services() 
    {
        foreach(self::get_services() as $class) 
        {
            $service = self::instantiate($class);
            if ( method_exists( $service, 'register' ) ) {
				$service->register();
			}
        }
    }

    private static function instantiate($class) 
    {
        return new $class;
    }
}