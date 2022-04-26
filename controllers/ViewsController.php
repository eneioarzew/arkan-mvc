<?php
namespace Main\Controllers;

/**
 * Handles view requests made for Arkan integrated views.
 */
class ViewsController {

    /**
     * @method private getFile()
     * @param string $path
     */
    private static function getFile($path): string {
        ob_start();
        include_once $path;
        $view = ob_get_clean();
        return $view;
    }

    public function home(): string {
        return self::getFile('views/home/index.scale.php');
    }

    public function e403(): string {
        return self::getFile('views/403/index.php');
    }

    public function e404(): string {
        return self::getFile('views/404/index.php');
    }

}