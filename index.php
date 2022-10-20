<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
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
            case 'convert':
                return $app->convert($params);
            case 'logout':
                return $app->logout($params);
            case 'sendMessage':
                return $app->addMessage($params);
            case 'getChat':
                return $app->getChat($params);
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
