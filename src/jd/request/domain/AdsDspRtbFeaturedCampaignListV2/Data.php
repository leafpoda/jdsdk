<?php
namespace AdsDspRtbFeaturedCampaignListV2;
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
            
    private $clickOrOrderCaliber;
    
    public function setClickOrOrderCaliber($clickOrOrderCaliber){
        $this->params['clickOrOrderCaliber'] = $clickOrOrderCaliber;
    }

    public function getClickOrOrderCaliber(){
        return $this->clickOrOrderCaliber;
    }
            
    private $impressionOrClickEffect;
    
    public function setImpressionOrClickEffect($impressionOrClickEffect){
        $this->params['impressionOrClickEffect'] = $impressionOrClickEffect;
    }

    public function getImpressionOrClickEffect(){
        return $this->impressionOrClickEffect;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $orderStatusCategory;
    
    public function setOrderStatusCategory($orderStatusCategory){
        $this->params['orderStatusCategory'] = $orderStatusCategory;
    }

    public function getOrderStatusCategory(){
        return $this->orderStatusCategory;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $requester;
    
    public function setRequester($requester){
        $this->params['requester'] = $requester;
    }

    public function getRequester(){
        return $this->requester;
    }
            
    private $nameLike;
    
    public function setNameLike($nameLike){
        $this->params['nameLike'] = $nameLike;
    }

    public function getNameLike(){
        return $this->nameLike;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $reqType;
    
    public function setReqType($reqType){
        $this->params['reqType'] = $reqType;
    }

    public function getReqType(){
        return $this->reqType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>