<?php
namespace CtpAfsOperateApplyGetApplyReason;
class ApplyReasonParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.aftersales.rpc.jos.apply.ApplyReasonParam";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $afsType;
    
    public function setAfsType($afsType){
        $this->params['afsType'] = $afsType;
    }

    public function getAfsType(){
        return $this->afsType;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>