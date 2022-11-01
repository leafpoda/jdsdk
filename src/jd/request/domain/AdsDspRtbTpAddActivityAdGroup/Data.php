<?php
namespace AdsDspRtbTpAddActivityAdGroup;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $adList;
                                        
    public function setAdList($adList){
        $size = count($adList);
        for ($i=0; $i<$size; $i++){
            $adList [$i] = $adList [$i] ->getInstance();
        }
        $this->params['adList'] = $adList;
    }
                                    
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $feeDecimal;
    
    public function setFeeDecimal($feeDecimal){
        $this->params['feeDecimal'] = $feeDecimal;
    }

    public function getFeeDecimal(){
        return $this->feeDecimal;
    }
            
    private $recommendAutomatedBiddingType;
    
    public function setRecommendAutomatedBiddingType($recommendAutomatedBiddingType){
        $this->params['recommendAutomatedBiddingType'] = $recommendAutomatedBiddingType;
    }

    public function getRecommendAutomatedBiddingType(){
        return $this->recommendAutomatedBiddingType;
    }
            
    private $premiumCoef;
    
    public function setPremiumCoef($premiumCoef){
        $this->params['premiumCoef'] = $premiumCoef;
    }

    public function getPremiumCoef(){
        return $this->premiumCoef;
    }
            
    private $enable;
    
    public function setEnable($enable){
        $this->params['enable'] = $enable;
    }

    public function getEnable(){
        return $this->enable;
    }
            
    private $activityName;
    
    public function setActivityName($activityName){
        $this->params['activityName'] = $activityName;
    }

    public function getActivityName(){
        return $this->activityName;
    }
            
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $url;
    
    public function setUrl($url){
        $this->params['url'] = $url;
    }

    public function getUrl(){
        return $this->url;
    }
            
    private $jointActivityId;
    
    public function setJointActivityId($jointActivityId){
        $this->params['jointActivityId'] = $jointActivityId;
    }

    public function getJointActivityId(){
        return $this->jointActivityId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>