<?php
namespace Main;

/**
 * Resource rendered from the server.
 */
class Resource {

    /**
     * Resource data variable.
     */
    private static $Data;
    /**
     * Resource name variable.
     */
    private static string $Name;

    /**
     * Gets resource data.
     */
    public function getData() {
        return self::$Data;
    }

    /**
     * Gets resource name.
     */
    public function getName() : string {
        return self::$Name;
    }

    /**
     * Sets resource.
     */
    public function set($Resource) : void {
        self::$Data = $Resource['data'];
        self::$Name = $Resource['name'];
    }

    /**
     * Returns a freshly rendered resource.
     * 
     * =+= This function may be included in a future update including a template engine. =+=
     */
    // public function render() : void {
    //     $open = substr_count(self::$Data, '${');
    //     $close = substr_count(self::$Data, '}$');
    //     if ($open != $close) return '';
    // }

}