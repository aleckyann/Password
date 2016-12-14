<?php

class Password
{   

    public static function crypt($password)
    {   
        $password =  password_hash($password, PASSWORD_BCRYPT, ['cost' => 12, 'salt' => '@gmail.com@yahoo.com@hotmail.com']);
        return $password;
    }

    public static function verify($password, $hash)
    {
        if(password_verify($password, $hash)){
            return 'true';
        } else {
            return 'false';
        }
    }

}
