<?php
require 'db/DB.php';
require 'user/User.php';
require 'chat/Chat.php';
require 'converts/Convert.php';

class Application
{
    function __construct()
    {
        $db = new DB();
        $this->user = new User($db);
        $this->chat = new Chat($db);
        $this->convert = new Convert();
    }
    function login($params)
    {
        if ($params['login'] && $params['password']) {
            return $this->user->login($params['login'], $params['password']);
        }
    }
<<<<<<< HEAD
    function registration($params)
    {
        if($params['login'] && $params['name'] && $params['password1'] && $params['password2'])
        {
                return $this->user->addUser($params['login'], $params['name'], $params['password1'], $params['password2']);
        }
    }
=======
>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
    function logout($params)
    {
        if ($params['token']) {
            return $this->user->logout($params['token']);
        }
    }
    function convert($params)
    {
        $user = $this->user->getUser($params['token']);
        if ($user && $params['number']) {
            return $this->convert->converted(
                $params['number'],
                $params['sys']
            );
        }
    }
    function sendMessage($params){
        if ($params['token'] && $params['message']) {
            $user = $this->user->getUser($params['token']);
            if ($user) {
                return $this->chat->sendMessage(
                    $user->id,
                    $params['message']
                );
            }
        }
    }
    function getMessages($params)
    {
        if ($params['token'] && $params['hash']) {
            $user = $this->user->getUser($params['token']);
            if ($user) {
                return $this->chat->getMessages($params['hash']);
            }
        }
    }
}
