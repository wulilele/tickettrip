<?php


namespace wulilele\tickettrip\Obj;


use wulilele\tickettrip\Config;

/**
 * 请求对象基类
 * @package wulilele\tickettrip\Obj
 */
class TicketBase
{
    public static $path = "";//接口相对路径

    public $_error = ""; //错误信息

    /**
     * @var array 参数数组
     * 以下为公共参数,会自动调取，不用传值
     * @params $userName string 用户名
     * @params $timestamp string 当前时间戳
     * @params $password string 加密后的密码
     */
    protected $values = array();

    public function __construct()
    {
        $this->values['userName'] = Config::$USERNAME; //用户名
        $currentTimestamp = time();
        $this->values['timestamp'] = $currentTimestamp; //当前时间戳
        $this->values['password'] = md5(Config::$PASSWORD . $currentTimestamp); //加密密码
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * 参数合法性检查
     */
    public function check(){
        return true;
    }

}