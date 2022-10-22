<?php
class Chat
{
    function __construct($db)
    {
        $this->db = $db;
    }
    function sendMessage($id, $message)
    {
        $this->db->sendMessage($id, $message);
        $hash = md5(rand());
        $this->db->setChatHash($hash);
        return array(
            "hash" => $hash,
        );
        // return $this->db->sendMessage($id, $message);
    }

    function getMessages($hash)
    {
        $dbHash = $this->db->getChatHash()->chatHash;
        if ($dbHash !== $hash) {
            return array(
                'messages' => $this->db->getMessages(),
                'hash' => $dbHash
            );
        }
        return array('hash' => $dbHash);
    }
}
