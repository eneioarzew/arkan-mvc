<?php
include_once('autoload.php');
$Config = new Config();
$URI_OFFSET = $Config->getURIOffset();
$URI_array = explode('/', $_SERVER['REQUEST_URI']);
for ($i = 0; $i < ['OFFSET-2' => 2, 'OFFSET-1' => 1][strtoupper($URI_OFFSET)]; $i++) array_shift($URI_array);
if (empty($URI_array[0])) $URI_array[0] = (new Routes())->getRoute('default')[0];
if (count($URI_array) < 2) header("Location:".$URI_array[0]."/index");
!empty($_POST) ?: $_POST = file_get_contents('php://input'); // This line is used to get POST headers sent from JS HTTP requests.
echo (new Controller())->getResource($URI_array, $_GET, $_POST)['body'];