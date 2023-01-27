<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header('Content-Type: text/html; charset=utf-8');
error_reporting(-1);

require('application/Application.php');

function router($params)
{
    $method = $params['method'];
    if ($method) {
        $app = new Application();
        switch ($method) {
            case 'login':
                return $app->login($params);
<<<<<<< HEAD
            case 'registration':
                return $app-> registration($params);
=======
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
            case 'convert':
                return $app->convert($params);
            case 'logout':
                return $app->logout($params);
            case 'sendMessage':
                return $app->sendMessage($params);
            case 'getMessages':
                return $app->getMessages($params);
        }
    }
    return false;
}

function answer($data)
{
    if ($data) {
        return array(
            'result' => 'ok',
            'data' => $data
        );
    }
    return array('result' => 'error');
}

echo json_encode(answer(router($_GET)));
