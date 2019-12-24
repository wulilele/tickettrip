<?php


namespace wulilele\tickettrip\Obj;


class GetOrderInfoByOrderNo extends TicketBase
{
    /**
     * @param $third_tid string 第三方订单号，（与订单号不能同时为空）
     */
    public function setOrderNo($third_tid){
        $this->values['orderNo'] = $third_tid;
    }

    /**
     * @param $child_tid string 订单号，（与第三方订单号不能同时为空）
     */
    public function setThirdSideOrigiOrderNo($child_tid){
        $this->values['thirdSideOrigiOrderNo'] = $child_tid;
    }
}