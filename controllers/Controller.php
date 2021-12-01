<?php
class Controller {

    public function getResource($URI_array, $GET_BODY, $POST_BODY): array {
        $ViewsController = new ViewsController();
        $Routes = new Routes();
        $route = $Routes->getRoute(implode('/', $URI_array));
        if (!$URI_array[2]) $GET_DATA = $GET_BODY;
        else $GET_DATA = strval($URI_array[2]);
        if(empty($route[2])) {
            $function = $route[0];
            $resource = ['type' => 'view', 'body' => $ViewsController->$function()];
        }
        else {
            $class = new $route[0]();
            $function = $route[1];
            $request_type = $route[2];
            if($request_type == 'POST') {
                $resource = ['type' => 'data', 'body' => (new $class)->$function($POST_BODY)];
            }
            else if($request_type == 'GET') {
                $resource = ['type' => 'data', 'body' => (new $class)->$function($GET_DATA)];
            }
        }
        return $resource;
    }

}