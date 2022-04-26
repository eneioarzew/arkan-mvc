<?php
namespace Main\Controllers;

/**
 * Main controller class for retrieving resources.
 */
class Controller {

    /**
     * Returns either a freshly rendered resource or a resource from cache.
     * =+= This function can be paired with data caching in future updates. =+=
     */

    /**
     * @method public getResource()
     * @param array $route
     * @param array $GET_DATA
     * @param array $POST_DATA
     */
    public function getResource($route, $GET_DATA, $POST_DATA): array {
        $Controller = new $route[0]();
        $function = $route[1];
        $request_type = $route[2];
        $data = null;
        $type = "ASSET";
        if (isset($request_type) || !empty($request_type)){
            if ($request_type == 'GET') $data = $GET_DATA;
            if ($request_type == 'POST') $data = $POST_DATA;
            $type = $request_type;
        }
        $resource = [
            'type' => $type,
            'data' => $Controller->$function($data),
            'name' => (string)$function,
        ];
        $resource ?: $resource = null;
        return $resource;
    }

}