<?php


namespace wulilele\tickettrip\Obj;

/**
 * 短信重发
 * @package wulilele\tickettrip\Obj
 */
class RepeatSms extends TicketBase
{
    public static $path = "/ticketInterface/repeatSms.do";

    /**
     * @param $third_tid string 票在旅途云平台订单号
     */
    public function setOrderNo($third_tid){
        $this->values['orderNo'] = $third_tid;
    }
}