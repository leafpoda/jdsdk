<?php
namespace CtpWareSkuGetBrotherList;
class ApiBrotherListParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.ware.rpc.jos.sku.ApiBrotherListParam";
    }
        
    private $skuIdSet;
                        
    public function setSkuIdSet($skuIdSet){
        $this->params['skuIdSet'] = $skuIdSet;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>