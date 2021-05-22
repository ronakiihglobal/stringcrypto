<?php 

namespace ronakiihglobal\stringcrypto;

class Crypto
{
    static $secretKey = '';
    static $secretIv = '';


    public static function init($key = "", $iv="")
    {
        self::$secretKey = $key;
        self::$secretIv = $iv;
    }


    public static function encrypt($string) {
        
        $output = false;
        $encrypt_method = "AES-256-CBC";
        //pls set your unique hashing key
        // hash
        $key = hash('sha256', self::$secretKey);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', self::$secretIv), 0, 16);

        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);

        return $output;
    }
    /**
     * Returns decrypted original string
     *
     * @param  $string - Enctrypted string
     *
     * @return string
     */
    public static function decrypt($string) {

        $output = false;
        $encrypt_method = "AES-256-CBC";
        
        // hash
        $key = hash('sha256', self::$secretKey);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', self::$secretIv), 0, 16);

        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);

        return $output;
    }
}