<?php
namespace CtpWareStockQueryAreaStockState;
class StockStateParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.ware.rpc.jos.stock.AreaStockStateParam";
    }
        
    private $skuQuantityList;
                                        
    public function setSkuQuantityList($skuQuantityList){
        $size = count($skuQuantityList);
        for ($i=0; $i<$size; $i++){
            $skuQuantityList [$i] = $skuQuantityList [$i] ->getInstance();
        }
        $this->params['skuQuantityList'] = $skuQuantityList;
    }
                                    
            
    private $address;
            
    public function setAddress($address){
        $this->params['address'] = $address ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>