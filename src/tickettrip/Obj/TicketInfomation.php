<?php


namespace wulilele\tickettrip\Obj;

/**
 * 购票信息，为SaveOrder的一部分
 * @package wulilele\tickettrip\Obj
 */
class TicketInfomation
{

    protected $certificateParamList;//实名制信息
    protected $orderTicketSum;  //购票数量
    protected $ticketTypeNO;    //票种编号
    protected $activityTimeNo;  //票种签约价格（当景区支持自定义价格且下单票种为区间价格票种时为必填参数）
    protected $ticketPrice; //场次编号,剧场门票时必传

    /**
     * 实名制信息
     * @param array $certificateParamList 实名制信息对象数组
     */
    public function setCertificateParamList($certificateParamList)
    {
        $this->certificateParamList = $certificateParamList;
    }

    /**
     * 购票数量
     * @param int $orderTicketSum
     */
    public function setOrderTicketSum($orderTicketSum)
    {
        $this->orderTicketSum = $orderTicketSum;
    }

    /**
     * 票种编号
     * @param string $ticketTypeNO
     */
    public function setTicketTypeNO($ticketTypeNO)
    {
        $this->ticketTypeNO = $ticketTypeNO;
    }

    /**
     * 票种签约价格
     * @param string $activityTimeNo
     */
    public function setActivityTimeNo($activityTimeNo)
    {
        $this->activityTimeNo = $activityTimeNo;
    }

    /**
     * 场次编号
     * @param string $ticketPrice
     */
    public function setTicketPrice($ticketPrice)
    {
        $this->ticketPrice = $ticketPrice;
    }
}