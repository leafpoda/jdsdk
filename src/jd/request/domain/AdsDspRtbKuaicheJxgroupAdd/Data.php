<?php
namespace AdsDspRtbKuaicheJxgroupAdd;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $newAreaIds;
                        
    public function setNewAreaIds($newAreaIds){
        $this->params['newAreaIds'] = $newAreaIds;
    }
                    
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $adDevice;
    
    public function setAdDevice($adDevice){
        $this->params['adDevice'] = $adDevice;
    }

    public function getAdDevice(){
        return $this->adDevice;
    }
            
    private $adDefaultCreative;
    
    public function setAdDefaultCreative($adDefaultCreative){
        $this->params['adDefaultCreative'] = $adDefaultCreative;
    }

    public function getAdDefaultCreative(){
        return $this->adDefaultCreative;
    }
            
    private $adList;
                                        
    public function setAdList($adList){
        $size = count($adList);
        for ($i=0; $i<$size; $i++){
            $adList [$i] = $adList [$i] ->getInstance();
        }
        $this->params['adList'] = $adList;
    }
                                    
            
    private $adOptimize;
    
    public function setAdOptimize($adOptimize){
        $this->params['adOptimize'] = $adOptimize;
    }

    public function getAdOptimize(){
        return $this->adOptimize;
    }
            
    private $keywordAutomated;
    
    public function setKeywordAutomated($keywordAutomated){
        $this->params['keywordAutomated'] = $keywordAutomated;
    }

    public function getKeywordAutomated(){
        return $this->keywordAutomated;
    }
            
    private $keywordAutomatedCoef;
    
    public function setKeywordAutomatedCoef($keywordAutomatedCoef){
        $this->params['keywordAutomatedCoef'] = $keywordAutomatedCoef;
    }

    public function getKeywordAutomatedCoef(){
        return $this->keywordAutomatedCoef;
    }
            
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>