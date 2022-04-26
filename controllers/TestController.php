<?php
class TestController {

    public function fetch($data): string {
        return json_encode(['data'=>$data]);
    }

}