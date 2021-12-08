<?php
namespace CtpOrderSubmitOrder;
class Subsidy{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.Subsidy";
    }
        
    private $subsidyFee;
    
    public function setSubsidyFee($subsidyFee){
        $this->params['subsidyFee'] = $subsidyFee;
    }

    public function getSubsidyFee(){
        return $this->subsidyFee;
    }
            
    private $subsidyRatio;
    
    public function setSubsidyRatio($subsidyRatio){
        $this->params['subsidyRatio'] = $subsidyRatio;
    }

    public function getSubsidyRatio(){
        return $this->subsidyRatio;
    }
            
    private $subsidyId;
    
    public function setSubsidyId($subsidyId){
        $this->params['subsidyId'] = $subsidyId;
    }

    public function getSubsidyId(){
        return $this->subsidyId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>