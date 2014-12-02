<?php
/**
 * Created by PhpStorm.
 * User: user2
 * Date: 27/11/14
 * Time: 19:14
 */

namespace Core;


class Hasa {

    public function validateLogin(array $userCredentials, $databaseConnection)
    {
        $user = $databaseConnection->existUser($userCredentials["username"], $userCredentials["password"]);
        if($user == null) {
            return false;
        }

        return true;
    }
}