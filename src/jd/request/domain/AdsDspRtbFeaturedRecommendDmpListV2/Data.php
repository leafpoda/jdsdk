<?php
namespace AdsDspRtbFeaturedRecommendDmpListV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.ReportQueryVO";
    }
        
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $startDay;
    
    public function setStartDay($startDay){
        $this->params['startDay'] = $startDay;
    }

    public function getStartDay(){
        return $this->startDay;
    }
            
    private $endDay;
    
    public function setEndDay($endDay){
        $this->params['endDay'] = $endDay;
    }

    public function getEndDay(){
        return $this->endDay;
    }
            
    private $clickOrOrderDay;
    
    public function setClickOrOrderDay($clickOrOrderDay){
        $this->params['clickOrOrderDay'] = $clickOrOrderDay;
    }

    public function getClickOrOrderDay(){
        return $this->clickOrOrderDay;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $orderStatusCategory;
    
    public function setOrderStatusCategory($orderStatusCategory){
        $this->params['orderStatusCategory'] = $orderStatusCategory;
    }

    public function getOrderStatusCategory(){
        return $this->orderStatusCategory;
    }
            
    private $impressionOrClickEffect;
    
    public function setImpressionOrClickEffect($impressionOrClickEffect){
        $this->params['impressionOrClickEffect'] = $impressionOrClickEffect;
    }

    public function getImpressionOrClickEffect(){
        return $this->impressionOrClickEffect;
    }
            
    private $clickOrOrderCaliber;
    
    public function setClickOrOrderCaliber($clickOrOrderCaliber){
        $this->params['clickOrOrderCaliber'] = $clickOrOrderCaliber;
    }

    public function getClickOrOrderCaliber(){
        return $this->clickOrOrderCaliber;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>