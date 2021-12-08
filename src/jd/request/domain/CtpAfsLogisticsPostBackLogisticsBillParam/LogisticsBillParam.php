<?php
namespace CtpAfsLogisticsPostBackLogisticsBillParam;
class LogisticsBillParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.aftersales.rpc.jos.logistics.LogisticsBillParam";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $logisticsCompany;
    
    public function setLogisticsCompany($logisticsCompany){
        $this->params['logisticsCompany'] = $logisticsCompany;
    }

    public function getLogisticsCompany(){
        return $this->logisticsCompany;
    }
            
    private $waybillCode;
    
    public function setWaybillCode($waybillCode){
        $this->params['waybillCode'] = $waybillCode;
    }

    public function getWaybillCode(){
        return $this->waybillCode;
    }
            
    private $sendGoodsDate;
    
    public function setSendGoodsDate($sendGoodsDate){
        $this->params['sendGoodsDate'] = $sendGoodsDate;
    }

    public function getSendGoodsDate(){
        return $this->sendGoodsDate;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>