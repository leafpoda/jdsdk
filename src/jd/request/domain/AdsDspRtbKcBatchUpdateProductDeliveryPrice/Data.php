<?php
namespace AdsDspRtbKcBatchUpdateProductDeliveryPrice;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.ProductDeliveryVO";
    }
        
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $priceList;
                                        
    public function setPriceList($priceList){
        $size = count($priceList);
        for ($i=0; $i<$size; $i++){
            $priceList [$i] = $priceList [$i] ->getInstance();
        }
        $this->params['priceList'] = $priceList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>