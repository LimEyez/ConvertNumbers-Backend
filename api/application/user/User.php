<?php
class User
{
    function __construct($db)
    {
        $this->db = $db;
    }
<<<<<<< HEAD
=======

>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
    function login($login, $password)
    {
        $user = $this->db->getUser($login);
        if ($user && $password === $user->password) {
            $token = md5(rand());
            $this->db->updateToken($user->id, $token);
            return array('name' => $user->name, 'token' => $token);
        }
    }
<<<<<<< HEAD
    function addUser($login, $name, $password1, $password2)
    {
        $user = $this->db->getUser($login);
        if($user){
            return array('message' => 'Пользователь с таким логином уже существует!', 'status' => true);
        }
        if ($password1 === $password2)
        {
            return $this->db->addUser($login, $name, $password1);
        }
        else {
            return array('message' => "Пароли не совпадают!", 'status' => true);
        }
    }
=======

>>>>>>> b7d932a3cef7436512fedba2c3a1cab53fbec1e7
    function getUser($token)
    {
        return $this->db->getUserByToken($token);
    }

    function logout($token)
    {
        $user = $this->db->getUserByToken($token);
        if ($user) {
            $this->db->updateToken($user->id, '');
            $user = $this->db->getUser($user->login);
            return array('token' => $user->token);
        }
    }
}
