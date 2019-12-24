<?php


namespace wulilele\tickettrip\Obj;

/**
 * 退单
 * @package wulilele\tickettrip\Obj
 */
class CancelOrder extends TicketBase
{
    public static $path = "/ticketInterface/cancelOrder.do";

    /**
     * @param $third_tid string 票在旅途云平台订单号
     */
    public function setOrderNo($third_tid){
        $this->values['orderNo'] = $third_tid;
    }
}