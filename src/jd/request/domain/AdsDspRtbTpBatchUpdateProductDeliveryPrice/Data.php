<?php
namespace AdsDspRtbTpBatchUpdateProductDeliveryPrice;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.ProductDeliveryVO";
    }
        
    private $pcPrice;
    
    public function setPcPrice($pcPrice){
        $this->params['pcPrice'] = $pcPrice;
    }

    public function getPcPrice(){
        return $this->pcPrice;
    }
            
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $mobilePrice;
    
    public function setMobilePrice($mobilePrice){
        $this->params['mobilePrice'] = $mobilePrice;
    }

    public function getMobilePrice(){
        return $this->mobilePrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>