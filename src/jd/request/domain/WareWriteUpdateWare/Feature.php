<?php
namespace WareWriteUpdateWare;
class Feature{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Feature";
    }
        
    private $featureKey;
    
    public function setFeatureKey($featureKey){
        $this->params['featureKey'] = $featureKey;
    }

    public function getFeatureKey(){
        return $this->featureKey;
    }
            
    private $featureValue;
    
    public function setFeatureValue($featureValue){
        $this->params['featureValue'] = $featureValue;
    }

    public function getFeatureValue(){
        return $this->featureValue;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>