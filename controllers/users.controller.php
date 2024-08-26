<?php

class UsersController {

    public function ctrLoginUser() {

        // ingUser and ingPassword

        if (isset($_POST["ingUser"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {

                $table = "users";

                $item = "user";
                $value = $_POST["ingUser"];

                $response = UsersModel::mdlShowUsers($table, $item, $value);

                if ($response["user"] == $_POST["ingUser"] && $response["password"] == $_POST["ingPassword"]) {
                    $_SESSION["sessionInit"] = "ok";
                    echo '<script>
                            window.location = "home";
                          </script>';

                } else {
                    echo '<br><div class="alert alert-danger">Incorrect username or password</div>';
                }

            }

        }

    }

}
