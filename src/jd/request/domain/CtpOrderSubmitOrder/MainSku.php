<?php
namespace CtpOrderSubmitOrder;
class MainSku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.order.api.bean.Sku";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuPrice;
    
    public function setSkuPrice($skuPrice){
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice(){
        return $this->skuPrice;
    }
            
    private $quantity;
    
    public function setQuantity($quantity){
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>