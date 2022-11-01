<?php
namespace AdsDspRtbTpAddAdGroupV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
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
            
    private $recommendTcpaBid;
    
    public function setRecommendTcpaBid($recommendTcpaBid){
        $this->params['recommendTcpaBid'] = $recommendTcpaBid;
    }

    public function getRecommendTcpaBid(){
        return $this->recommendTcpaBid;
    }
            
    private $deliveryTarget;
    
    public function setDeliveryTarget($deliveryTarget){
        $this->params['deliveryTarget'] = $deliveryTarget;
    }

    public function getDeliveryTarget(){
        return $this->deliveryTarget;
    }
            
    private $premiumCoef;
    
    public function setPremiumCoef($premiumCoef){
        $this->params['premiumCoef'] = $premiumCoef;
    }

    public function getPremiumCoef(){
        return $this->premiumCoef;
    }
            
    private $dayCost;
    
    public function setDayCost($dayCost){
        $this->params['dayCost'] = $dayCost;
    }

    public function getDayCost(){
        return $this->dayCost;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>