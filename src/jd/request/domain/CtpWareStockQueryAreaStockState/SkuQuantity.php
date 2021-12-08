<?php
namespace CtpWareStockQueryAreaStockState;
class SkuQuantity{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.ware.rpc.jos.stock.bean.SkuQuantity";
    }
        
    private $quantity;
    
    public function setQuantity($quantity){
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>