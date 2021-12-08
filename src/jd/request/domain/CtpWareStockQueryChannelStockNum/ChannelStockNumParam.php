<?php
namespace CtpWareStockQueryChannelStockNum;
class ChannelStockNumParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.ware.rpc.jos.stocknum.ChannelStockNumParam";
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