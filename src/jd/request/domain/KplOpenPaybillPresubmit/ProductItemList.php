<?php
namespace KplOpenPaybillPresubmit;
class ProductItemList{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.ProductItemV";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $spuName;
    
    public function setSpuName($spuName){
        $this->params['spuName'] = $spuName;
    }

    public function getSpuName(){
        return $this->spuName;
    }
            
    private $quantity;
    
    public function setQuantity($quantity){
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }
            
    private $skuPrice;
    
    public function setSkuPrice($skuPrice){
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice(){
        return $this->skuPrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>