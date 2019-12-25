<?php


namespace wulilele\tickettrip\Obj;


class RepeatMms extends TicketBase
{
    public static $path = "/ticketInterface/repeatMms.do";

    /**
     * @param $third_tid string 票在旅途云平台订单号
     */
    public function setOrderNo($third_tid){
        $this->values['orderNo'] = $third_tid;
    }
}