<?php
namespace KplOpenPaybillRefundApply;
class RefundVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pay.bill.api.kpl.vo.refund.ApplyRefundVO";
    }
        
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $refundFee;
    
    public function setRefundFee($refundFee){
        $this->params['refundFee'] = $refundFee;
    }

    public function getRefundFee(){
        return $this->refundFee;
    }
            
    private $venderOrderNum;
    
    public function setVenderOrderNum($venderOrderNum){
        $this->params['venderOrderNum'] = $venderOrderNum;
    }

    public function getVenderOrderNum(){
        return $this->venderOrderNum;
    }
            
    private $uniqueKey;
    
    public function setUniqueKey($uniqueKey){
        $this->params['uniqueKey'] = $uniqueKey;
    }

    public function getUniqueKey(){
        return $this->uniqueKey;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>