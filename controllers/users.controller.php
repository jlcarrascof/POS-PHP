<?php

class UsersController {

    public function ctrLoginUser() {

        // ingUser and ingPassword

        if (isset($_POST["ingUser"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {

                 $table = "users";
            }

        }

    }

}
