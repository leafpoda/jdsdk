<?php
namespace AdsDspRtbKeywordSkuRecommendListV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordRecommendVO";
    }
        
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $devType;
    
    public function setDevType($devType){
        $this->params['devType'] = $devType;
    }

    public function getDevType(){
        return $this->devType;
    }
            
    private $adKeywordTypes;
                        
    public function setAdKeywordTypes($adKeywordTypes){
        $this->params['adKeywordTypes'] = $adKeywordTypes;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>