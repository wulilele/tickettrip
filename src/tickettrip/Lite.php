<?php

namespace wulilele\tickettrip;

use Exception;
use wulilele\tickettrip\Config;
use wulilele\tickettrip\Obj\TicketBase;

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
     * @param $object TicketBase 参数对象
     * @return array
     * @throws Exception
     */
    public function request($object){
        //增加参数检查
        if(!$object->check()){
            throw new Exception($object->_error);   //抛出异常错误信息
        }

        $url = Config::$APIURL . $object::$path;//接口完整路径
        $data = $object->getValues();//请求参数
        $param['data'] = json_encode($data);
        //加签
        $param['sign'] = $this->createSign($param,Config::$KEY);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            "Content-Type : application/json"
        ];
        if(!empty($options)){
            $headers = array_merge($headers,$options);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$param);
        $response = curl_exec($ch);
        curl_close($ch);
        return  $response;
    }


    /**
     * 验签
     * @param array $params 请求参数
     * @param string $key 密钥
     * @return bool
     */
    public function verifySign($params, $key){
        $str = $this->createLinkString($this->paraFilter($params));
        $str = md5(Config::$KEY . $str);
        if(isset($params['sign']) && $params['sign'] == $str){
            return true;
        }
        return false;
    }

    /**
     * 加签
     * 传入请求参数生，生成签名
     * @param array $params 请求参数
     * @param $key string 密钥
     * @return string
     */
    public function createSign($params, $key){
        $str = $this->createLinkString($this->paraFilter($params));
        $str = md5(Config::$KEY . $str);
        if($str != null){
            $str = strtoupper($str);
        }
        return $str;
    }

    /**
     * 去除数组中的空值和签名参数sign
     * @param array $params 待签名的参数
     * @return array
     */
    public function paraFilter($params = array()){
        if($params == null || count($params) <= 0){
            return $params;
        }
        foreach ($params as $key => $val){
            if($val == null || $val == "" || $key == "sign"){
                unset($params[$key]);
            }
        }
        return $params;
    }

    /**
     * 把数组元素按照“参数参数值”拼接字符串
     * @param array $params 去除空值和签名参数sign的待签参数数组
     * @return string
     */
    public function createLinkString($params = array()){
        asort($params);
        $str = "";
        foreach ($params as $key => $val){
            $str .= $key . $val;
        }
        return $str;
    }

}