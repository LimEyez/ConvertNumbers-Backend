<?php
class DB
{
    function __construct()
    {
        $host = 'localhost';
        $port = '3306'; //может быть другим
        $name = 'bdshka';
        $user = 'root'; // не в учебных целях пользоваться root нельзя
        $pass = '';

        try {
            $this->db = new PDO(
                'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $name, //тип БД
                $user,
                $pass
            );
        } catch (Exception $e) {
            print_r($e->getMessage());
            die(); //Единственное место, где можно использовать die()
        }
    }
    function __destruct()
    {
        $this->db = null;
    }

    private function getArray($query)
    {
        $stmt = $this->db->query($query);
        $result = array();
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $result[] = $row;
        }
        return $result;
    }

    public function addUser($login, $name, $password)
    {
        $query = 'INSERT INTO users (`login`, `password`, `name`) VALUES ("' . $login . '", "' . $password . '", "' . $name . '")';
        $this->db->query($query)->fetchObject();
        return array('message' => "Пользователь добавлен!", 'status' => false);
    }

    public function getUser($login)
    {
        $query = 'SELECT * FROM users WHERE login ="' . $login . '"';
        return $this->db->query($query)->fetchObject();
    }

    public function getUserByToken($token)
    {
        $query = 'SELECT * FROM users WHERE token ="' . $token . '"';
        return $this->db->query($query)->fetchObject();
    }

    public function updateToken($id, $token)
    {
        $query = 'UPDATE users SET token="' . $token . '" WHERE id=' . $id;
        $this->db->query($query);
        return true;
    }

    public function getUsers()
    {
        $query = 'SELECT * FROM users';
        return $this->getArray($query);
    }

    public function getMessages()
    {
        $query = 'SELECT chat.message, chat.date, users.name FROM chat, users WHERE chat.id = users.id';
        return $this->getArray($query);
    }

    public function sendMessage($id, $message)
    {
        $query = 'INSERT INTO `chat` (id, `message`) VALUES ( ' . $id . ' , "' . $message . '")';
        $this->db->query($query);
        return true;
    }

    public function getChatHash() {
        $query = 'SELECT chatHash FROM statuses';
        return $this->db->query($query)->fetchObject();
    }

    public function setChatHash($hash) {
        $query = 'UPDATE statuses SET chatHash="' . $hash . '"';
        $this->db->query($query);
        return true;
    }
}
