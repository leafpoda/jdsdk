<?php
namespace AdsDspRtbKuaicheDmpOperate;
class CrowdVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.dmp.CrowdVO";
    }
        
    private $isUsed;
    
    public function setIsUsed($isUsed){
        $this->params['isUsed'] = $isUsed;
    }

    public function getIsUsed(){
        return $this->isUsed;
    }
            
    private $adGroupPrice;
    
    public function setAdGroupPrice($adGroupPrice){
        $this->params['adGroupPrice'] = $adGroupPrice;
    }

    public function getAdGroupPrice(){
        return $this->adGroupPrice;
    }
            
    private $crowdId;
    
    public function setCrowdId($crowdId){
        $this->params['crowdId'] = $crowdId;
    }

    public function getCrowdId(){
        return $this->crowdId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>