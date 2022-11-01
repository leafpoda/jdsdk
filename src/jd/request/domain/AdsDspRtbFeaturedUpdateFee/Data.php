<?php
namespace AdsDspRtbFeaturedUpdateFee;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
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
            
    private $fee;
    
    public function setFee($fee){
        $this->params['fee'] = $fee;
    }

    public function getFee(){
        return $this->fee;
    }
            
    private $biddingTarget;
    
    public function setBiddingTarget($biddingTarget){
        $this->params['biddingTarget'] = $biddingTarget;
    }

    public function getBiddingTarget(){
        return $this->biddingTarget;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>