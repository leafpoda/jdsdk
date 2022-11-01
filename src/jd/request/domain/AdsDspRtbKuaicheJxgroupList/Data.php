<?php
namespace AdsDspRtbKuaicheJxgroupList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.ReportQueryVO";
    }
        
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $endDay;
    
    public function setEndDay($endDay){
        $this->params['endDay'] = $endDay;
    }

    public function getEndDay(){
        return $this->endDay;
    }
            
    private $adGroupIds;
                        
    public function setAdGroupIds($adGroupIds){
        $this->params['adGroupIds'] = $adGroupIds;
    }
                    
            
    private $nameLike;
    
    public function setNameLike($nameLike){
        $this->params['nameLike'] = $nameLike;
    }

    public function getNameLike(){
        return $this->nameLike;
    }
            
    private $startDay;
    
    public function setStartDay($startDay){
        $this->params['startDay'] = $startDay;
    }

    public function getStartDay(){
        return $this->startDay;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $campaignIds;
                        
    public function setCampaignIds($campaignIds){
        $this->params['campaignIds'] = $campaignIds;
    }
                    
            
    private $clickOrOrderCaliber;
    
    public function setClickOrOrderCaliber($clickOrOrderCaliber){
        $this->params['clickOrOrderCaliber'] = $clickOrOrderCaliber;
    }

    public function getClickOrOrderCaliber(){
        return $this->clickOrOrderCaliber;
    }
            
    private $clickOrOrderDay;
    
    public function setClickOrOrderDay($clickOrOrderDay){
        $this->params['clickOrOrderDay'] = $clickOrOrderDay;
    }

    public function getClickOrOrderDay(){
        return $this->clickOrOrderDay;
    }
            
    private $orderStatusCategory;
    
    public function setOrderStatusCategory($orderStatusCategory){
        $this->params['orderStatusCategory'] = $orderStatusCategory;
    }

    public function getOrderStatusCategory(){
        return $this->orderStatusCategory;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>