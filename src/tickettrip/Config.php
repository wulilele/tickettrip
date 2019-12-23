<?php


namespace wulilele\tickettrip;

/**
 * 配置类
 * @package wulilele\tickettrip
 */
class Config
{

    public static $USERNAME = "username";//用户名

    public static $PASSWORD = "password";//密码

    public static $KEY = "key";//加密密钥

    public static $APIURL = "apiUrl";//API接口地址

    /**
     * @param $username string
     * @param $password string
     * @param $key string
     * @param $apiUrl string
     */
    public static function set($username,$password,$key,$apiUrl){
        self::$USERNAME = $username;
        self::$PASSWORD = $password;
        self::$KEY = $key;
        self::$APIURL = $apiUrl;
    }

}