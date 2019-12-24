<?php


namespace wulilele\tickettrip\Obj;

/**
 * 实名制信息，为SaveOrder的一部分
 * @package wulilele\tickettrip\Obj
 */
class certificateParam
{
    protected $holdTicketName;//持票人姓名（一票多客入园标志为“Y”时不能填）
    protected $certificateNo;//证件号码（一票多客入园标志为“Y”时不能填）
    protected $touristPhone;//持票人手机号码（一票多客入园标志为“Y”时不能填）

    /**
     * 持票人姓名
     * @param mixed $holdTicketName
     */
    public function setHoldTicketName($holdTicketName)
    {
        $this->holdTicketName = $holdTicketName;
    }

    /**
     * 证件号码
     * @param mixed $certificateNo
     */
    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo = $certificateNo;
    }

    /**
     * 持票人手机号码
     * @param mixed $touristPhone
     */
    public function setTouristPhone($touristPhone)
    {
        $this->touristPhone = $touristPhone;
    }


}