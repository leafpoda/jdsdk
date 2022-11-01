<?php
namespace AdsDspRtbKeywordShopRecommendList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.keyword.KeywordRecommendVO";
    }
        
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>