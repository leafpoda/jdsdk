<?php
namespace AdsDspRtbKuaicheProductgroupAddV2;
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
                                    
            
    private $newAreaIds;
                        
    public function setNewAreaIds($newAreaIds){
        $this->params['newAreaIds'] = $newAreaIds;
    }
                    
            
    private $crowdVO;
            
    public function setCrowdVO($crowdVO){
        $this->params['crowdVO'] = $crowdVO ->getInstance();
    }
        
            
    private $feeDecimal;
    
    public function setFeeDecimal($feeDecimal){
        $this->params['feeDecimal'] = $feeDecimal;
    }

    public function getFeeDecimal(){
        return $this->feeDecimal;
    }
            
    private $inSearchFee;
    
    public function setInSearchFee($inSearchFee){
        $this->params['inSearchFee'] = $inSearchFee;
    }

    public function getInSearchFee(){
        return $this->inSearchFee;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $mobilePriceCoef;
    
    public function setMobilePriceCoef($mobilePriceCoef){
        $this->params['mobilePriceCoef'] = $mobilePriceCoef;
    }

    public function getMobilePriceCoef(){
        return $this->mobilePriceCoef;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $putType;
    
    public function setPutType($putType){
        $this->params['putType'] = $putType;
    }

    public function getPutType(){
        return $this->putType;
    }
            
    private $automatedBiddingType;
    
    public function setAutomatedBiddingType($automatedBiddingType){
        $this->params['automatedBiddingType'] = $automatedBiddingType;
    }

    public function getAutomatedBiddingType(){
        return $this->automatedBiddingType;
    }
            
    private $deliveryTarget;
    
    public function setDeliveryTarget($deliveryTarget){
        $this->params['deliveryTarget'] = $deliveryTarget;
    }

    public function getDeliveryTarget(){
        return $this->deliveryTarget;
    }
            
    private $dayCost;
    
    public function setDayCost($dayCost){
        $this->params['dayCost'] = $dayCost;
    }

    public function getDayCost(){
        return $this->dayCost;
    }
            
    private $tcpaMaxClickBid;
    
    public function setTcpaMaxClickBid($tcpaMaxClickBid){
        $this->params['tcpaMaxClickBid'] = $tcpaMaxClickBid;
    }

    public function getTcpaMaxClickBid(){
        return $this->tcpaMaxClickBid;
    }
            
    private $premiumCoef;
    
    public function setPremiumCoef($premiumCoef){
        $this->params['premiumCoef'] = $premiumCoef;
    }

    public function getPremiumCoef(){
        return $this->premiumCoef;
    }
            
    private $biddingControlType;
    
    public function setBiddingControlType($biddingControlType){
        $this->params['biddingControlType'] = $biddingControlType;
    }

    public function getBiddingControlType(){
        return $this->biddingControlType;
    }
            
    private $orientationRange;
    
    public function setOrientationRange($orientationRange){
        $this->params['orientationRange'] = $orientationRange;
    }

    public function getOrientationRange(){
        return $this->orientationRange;
    }
            
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>