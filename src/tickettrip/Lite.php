<?php

namespace wulilele\tickettrip;

use Exception;
use wulilele\tickettrip\Config;

/**
 * 入口
 * @package wulilele\tickettrip
 */
class Lite
{

    /**
     * Lite constructor.
     * @param array $options
     * @throws Exception
     */
    public function __construct($options = array())
    {
       //检查配置参数是否合法
        $username = isset($options['username']) ? $options['username'] : "";
        if(empty($username)){
            throw new Exception("接口用户名username必须");
        }
        $password = isset($options['password']) ? $options['password'] : "";
        if(empty($password)){
            throw new Exception("接口用户密码password必须");
        }
        $key = isset($options['key']) ? $options['key'] : "";
        if(empty($key)){
            throw new Exception("接口加密密钥key必须");
        }
        $apiUrl = isset($options['apiUrl']) ? $options['apiUrl'] : "";
        if(empty($apiUrl)){
            throw new Exception("接口地址apiUrl必须");
        }
        //设置配置参数
        Config::set($username,$password,$key,$apiUrl);
    }

    /**
     * 云平台接口请求统一方法
     * @param $object object 参数对象
     * @return array
     */
    public function request($object){
        return [];
    }


    /**
     * 验签
     * @param array $params 请求参数
     * @param string $key 密钥
     */
    public function verifySign($params = array(),$key){

    }

    /**
     * 加签
     * 传入请求参数生成带签名的请求参数
     * @param array $params 请求参数
     * @param $key string 密钥
     */
    public function createSign($params = array(),$key){

    }

    /**
     * 去除数组中的空值和签名参数sign
     * @param array $params 待签名的参数
     */
    public function paraFilter($params = array()){

    }

    /**
     * 把数组元素按照“参数参数值”拼接字符串
     * @param array $params 去除空值和签名参数sign的待签参数数组
     */
    public function createLinkString($params = array()){

    }

}