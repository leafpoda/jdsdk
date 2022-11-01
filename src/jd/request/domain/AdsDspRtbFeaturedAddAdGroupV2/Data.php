<?php
namespace AdsDspRtbFeaturedAddAdGroupV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $fee;
    
    public function setFee($fee){
        $this->params['fee'] = $fee;
    }

    public function getFee(){
        return $this->fee;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $position;
                        
    public function setPosition($position){
        $this->params['position'] = $position;
    }
                    
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
            
    private $adOptimize;
    
    public function setAdOptimize($adOptimize){
        $this->params['adOptimize'] = $adOptimize;
    }

    public function getAdOptimize(){
        return $this->adOptimize;
    }
            
    private $automatedBiddingType;
    
    public function setAutomatedBiddingType($automatedBiddingType){
        $this->params['automatedBiddingType'] = $automatedBiddingType;
    }

    public function getAutomatedBiddingType(){
        return $this->automatedBiddingType;
    }
            
    private $biddingTarget;
    
    public function setBiddingTarget($biddingTarget){
        $this->params['biddingTarget'] = $biddingTarget;
    }

    public function getBiddingTarget(){
        return $this->biddingTarget;
    }
            
    private $biddingControlType;
    
    public function setBiddingControlType($biddingControlType){
        $this->params['biddingControlType'] = $biddingControlType;
    }

    public function getBiddingControlType(){
        return $this->biddingControlType;
    }
            
    private $tcpaMaxClickBid;
    
    public function setTcpaMaxClickBid($tcpaMaxClickBid){
        $this->params['tcpaMaxClickBid'] = $tcpaMaxClickBid;
    }

    public function getTcpaMaxClickBid(){
        return $this->tcpaMaxClickBid;
    }
            
    private $dayCost;
    
    public function setDayCost($dayCost){
        $this->params['dayCost'] = $dayCost;
    }

    public function getDayCost(){
        return $this->dayCost;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>