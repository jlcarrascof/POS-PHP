<?php

require_once "connection.php";

class UsersModel {

    // SHOW USERS
    static public function mdlShowUsers($table, $item, $value) {
        $stmt = Connection::connect()->prepare();
    }
}
