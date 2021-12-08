<?php
namespace CtpAfsOperateApplyCreateAfsApply;
class AfsApplyParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.aftersales.rpc.jos.apply.AfsApplyParam";
    }
        
    private $applyReasonName;
    
    public function setApplyReasonName($applyReasonName){
        $this->params['applyReasonName'] = $applyReasonName;
    }

    public function getApplyReasonName(){
        return $this->applyReasonName;
    }
            
    private $applyReasonId;
    
    public function setApplyReasonId($applyReasonId){
        $this->params['applyReasonId'] = $applyReasonId;
    }

    public function getApplyReasonId(){
        return $this->applyReasonId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $channelAfsApplyId;
    
    public function setChannelAfsApplyId($channelAfsApplyId){
        $this->params['channelAfsApplyId'] = $channelAfsApplyId;
    }

    public function getChannelAfsApplyId(){
        return $this->channelAfsApplyId;
    }
            
    private $afsType;
    
    public function setAfsType($afsType){
        $this->params['afsType'] = $afsType;
    }

    public function getAfsType(){
        return $this->afsType;
    }
            
    private $questionPic;
    
    public function setQuestionPic($questionPic){
        $this->params['questionPic'] = $questionPic;
    }

    public function getQuestionPic(){
        return $this->questionPic;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $skuQuantity;
            
    public function setSkuQuantity($skuQuantity){
        $this->params['skuQuantity'] = $skuQuantity ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>