<?php


namespace wulilele\tickettrip\Obj;

/**
 * 退单
 * @package wulilele\tickettrip\Obj
 */
class CancelOrder extends TicketBase
{
    /**
     * @param $third_tid string 票在旅途云平台订单号
     */
    public function setOrderNo($third_tid){
        $this->values['paymentTypeId'] = $third_tid;
    }
}