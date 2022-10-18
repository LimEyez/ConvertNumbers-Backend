<?php
require 'db/DB.php';
require 'user/User.php';
require 'converts/Convert.php';

class Application {
    function __construct() {
        $db = new DB();
        $this->user = new User($db);
        $this->convert = new Convert();
    }

    function login($params) {
        if ($params['login'] && $params['password']) {
            return $this->user->login($params['login'], $params['password']);
        }
    }

    function convert($params) {
        $user = $this->user->getUser($params['token']);
        if ($user && $params['number']) {
            return $this->convert->converted(
                $params['number'], 
                $params['sys'] 
            );
        }
    }
    function logout($params){
        if ($params['token']){
            return $this->user->logout($params['token']);
        }
    }
}