<?php


namespace wulilele\tickettrip\Obj;

/**
 * 下单
 * @package wulilele\tickettrip\Obj
 */
class SaveOrder extends TicketBase
{
    public static $path = "/ticketInterface/saveOrder.do";

    public function __construct()
    {
        parent::__construct();
        //设置默认参数
        $this->values['certificateTypeNoFlag'] = "Y";   //默认刷取票身份证入园
        $this->values['paymentTypeId'] = 2; //默认签单
    }

    /**
     * @param $name string 取票人姓名
     * @require true 必填
     */
    public function setOrderGetTicketName($name){
        $this->values['orderGetTicketName'] = $name;
    }

    /**
     * @param $phone string 取票人手机号码，用于发送短信和彩信用
     * @require true 必填
     */
    public function setOrderGetTicketPhone($phone){
        $this->values['orderGetTicketPhone'] = $phone;
    }

    /**
     * 刷取票身份证入园标志，值为Y时：
     * 1、实名制（持票人姓名、证件号码、持票人手机号码）不能填写；
     * 2、取票人身份证号码（certificateTypeNo）可填可不填，填写了取票人身份证时可以通过取票人身份证号码刷闸机入园；
     * @param $flag string 刷取票身份证入园标志：Y是；N否
     */
    public function setCertificateTypeNoFlag($flag){
        $this->values['certificateTypeNoFlag'] = $flag;
    }

    /**
     * @param $idcard string 取票人身份
     * @require false
     */
    public function setCertificateTypeNo($idcard){
        $this->values['certificateTypeNo'] = $idcard;
    }

    /**
     * @param $start_date string 游玩开始日期Y-m-d
     * @require true
     */
    public function setOrderStarArrivalDate($start_date){
        $this->values['orderStarArrivalDate'] = $start_date;
    }

    /**
     * @param $end_date string 游玩结束日期Y-m-d
     * @require true
     */
    public function setOrderEndArrivaDate($end_date){
        $this->values['orderEndArrivaDate'] = $end_date;
    }

    /**
     * @param $type int 支付方式:1预存 2签单 3到付
     * 预存：分销商先往景区账户充值，然后下单；签单：分销商先下单，然后每隔一段时间与景区结算；到付：到现场售票窗口取票时支付，部分景区支持
     * @require false
     */
    public function setPaymentTypeId($type){
        $this->values['paymentTypeId'] = $type;
    }

    /**
     * @param $child_tid string 订单号
     * @require true
     */
    public function setThirdSideOrigiOrderNo($child_tid){
        $this->values['thirdSideOrigiOrderNo'] = $child_tid;
    }

    /**
     * 订单信息
     * @param array $array
     */
    public function setTicketInfomationList($array = array()){
        $this->values["ticketInfomationList"] = $array;
    }



    /**
     * 参数合法性检查
     * @return bool|void
     */
    public function check()
    {
        return true;
    }


}