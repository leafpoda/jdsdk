<?php
namespace AdsDspRtbTpBatchUpdateDifferentDmpPriceV2;
class DmpVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.dmp.DmpVO";
    }
        
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $adGroupPrice;
    
    public function setAdGroupPrice($adGroupPrice){
        $this->params['adGroupPrice'] = $adGroupPrice;
    }

    public function getAdGroupPrice(){
        return $this->adGroupPrice;
    }
            
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>