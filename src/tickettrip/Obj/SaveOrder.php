<?php


namespace wulilele\tickettrip\Obj;

/**
 * 下单
 * @package wulilele\tickettrip\Obj
 */
class SaveOrder extends TicketBase
{
    /**
     * @param $name string 取票人姓名
     * @require true 必填字段
     */
    public function setOrderGetTicketName($name){
        $this->values['orderGetTicketName'] = $name;
    }
}