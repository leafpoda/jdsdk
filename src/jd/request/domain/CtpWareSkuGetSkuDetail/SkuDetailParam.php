<?php
namespace CtpWareSkuGetSkuDetail;
class SkuDetailParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.ware.rpc.jos.sku.SkuDetailParam";
    }
        
    private $skuIdSet;
                        
    public function setSkuIdSet($skuIdSet){
        $this->params['skuIdSet'] = $skuIdSet;
    }
                    
            
    private $detailAssemblyType;
    
    public function setDetailAssemblyType($detailAssemblyType){
        $this->params['detailAssemblyType'] = $detailAssemblyType;
    }

    public function getDetailAssemblyType(){
        return $this->detailAssemblyType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>