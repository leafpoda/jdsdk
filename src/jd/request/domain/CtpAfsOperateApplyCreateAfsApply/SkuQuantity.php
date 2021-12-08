<?php
namespace CtpAfsOperateApplyCreateAfsApply;
class SkuQuantity{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.aftersales.rpc.jos.apply.bean.SkuQuantity";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $quantity;
    
    public function setQuantity($quantity){
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }
            
    private $afsDetailType;
    
    public function setAfsDetailType($afsDetailType){
        $this->params['afsDetailType'] = $afsDetailType;
    }

    public function getAfsDetailType(){
        return $this->afsDetailType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>