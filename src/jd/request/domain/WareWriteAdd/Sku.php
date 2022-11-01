<?php
namespace WareWriteAdd;
class Sku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Sku";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $saleAttrs;
                                        
    public function setSaleAttrs($saleAttrs){
        $size = count($saleAttrs);
        for ($i=0; $i<$size; $i++){
            $saleAttrs [$i] = $saleAttrs [$i] ->getInstance();
        }
        $this->params['saleAttrs'] = $saleAttrs;
    }
                                    
            
    private $features;
                                        
    public function setFeatures($features){
        $size = count($features);
        for ($i=0; $i<$size; $i++){
            $features [$i] = $features [$i] ->getInstance();
        }
        $this->params['features'] = $features;
    }
                                    
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $outerId;
    
    public function setOuterId($outerId){
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId(){
        return $this->outerId;
    }
            
    private $stockNum;
    
    public function setStockNum($stockNum){
        $this->params['stockNum'] = $stockNum;
    }

    public function getStockNum(){
        return $this->stockNum;
    }
            
    private $barCode;
    
    public function setBarCode($barCode){
        $this->params['barCode'] = $barCode;
    }

    public function getBarCode(){
        return $this->barCode;
    }
            
    private $props;
                                        
    public function setProps($props){
        $size = count($props);
        for ($i=0; $i<$size; $i++){
            $props [$i] = $props [$i] ->getInstance();
        }
        $this->params['props'] = $props;
    }
                                    
            
    private $multiCateProps;
                                        
    public function setMultiCateProps($multiCateProps){
        $size = count($multiCateProps);
        for ($i=0; $i<$size; $i++){
            $multiCateProps [$i] = $multiCateProps [$i] ->getInstance();
        }
        $this->params['multiCateProps'] = $multiCateProps;
    }
                                    
            
    private $capacity;
    
    public function setCapacity($capacity){
        $this->params['capacity'] = $capacity;
    }

    public function getCapacity(){
        return $this->capacity;
    }
            
    private $promiseId;
    
    public function setPromiseId($promiseId){
        $this->params['promiseId'] = $promiseId;
    }

    public function getPromiseId(){
        return $this->promiseId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>