<?php

require_once "connection.php";

class UsersModel {

    // SHOW USERS
    static public function mdlShowUsers($table, $item, $value) {
        $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
}
