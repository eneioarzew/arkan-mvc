<?php
// Routing includes setting of HTTP headers.
class Routes {

    private static array $List;

    public function __construct() {
        self::$List = [
            // URI => [view name/controller, function, http request type],
            // GET requests can also be processed by adding a route.
            // e.g. 'home/index?*' => ['home', '', '']
            // '/?*' => ['home', '' ,''], // This route is only for InfinityFree.
            'default' => ['home'],
            'home/index' => ['home', '', ''],
            'dashboard/index' => ['dashboard', '', ''],
            'accounts/index' => ['accounts', '', ''],
            'accounts/index?*' => ['accounts', '', ''],
            'accounts/view/*' => ['FetchController', 'account', 'GET'],
            'accounts/delete/*' => ['UpdateController', 'deleteAccount', 'GET'],
            'auth/login' => ['AuthController', 'login', 'POST'],
            'auth/logout' => ['AuthController', 'logout', 'POST'],
            'fetch/accounts' => ['FetchController', 'accounts', 'POST'],
            'fetch/accounts?*' => ['FetchController', 'accountsWithFilter', 'GET'],
            'fetch/billing' => ['FetchController', 'billing', 'POST'],
            'customer/index' => ['customer', '', ''],
            'customer/view/*' => ['UpdateController', 'customer', 'GET'],
            'customer/delete/*' => ['UpdateController', 'customer', 'GET'],
            'accounts/new' => ['newaccount', '', ''],
            'accounts/create' => ['CreateController', 'account', 'POST'],
            'mail/send' => ['MailController', 'sendMail', 'POST'],
            'users/index' => ['users', '', ''],
            'fetch/users' => ['FetchController', 'users', 'GET'],
            'billing/update' => ['UpdateController', 'updateBilling', 'POST'],
            'fetch/balance' => ['FetchController', 'balance', 'POST'],
            'fetch/allaccountscount' => ['FetchController', 'allaccountscount', 'POST'],
            'fetch/allbillingcount' => ['FetchController', 'allbillingcount', 'POST'],
        ];
    }

    public static function getRoute($URI): array {
        $keys = array_keys(self::$List);
        foreach ($keys as $key) {
            if (fnmatch($key, $URI)) {
                return self::getRouteArray($key, $URI);
            }
        }
    }

    private static function getRouteArray($key, $URI): array {
        $route = self::$List[$key];
        $exploded_URI = explode('/', $URI);
        if (isset($exploded_URI[2])) array_push($route, $exploded_URI[2]);
        return $route == null ? ['e404'] : $route;
    }

}