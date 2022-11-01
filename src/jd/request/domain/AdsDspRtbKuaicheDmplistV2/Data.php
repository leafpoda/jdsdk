<?php
namespace AdsDspRtbKuaicheDmplistV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.jos.JosReportQueryVO";
    }
        
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $clickOrOrderDay;
    
    public function setClickOrOrderDay($clickOrOrderDay){
        $this->params['clickOrOrderDay'] = $clickOrOrderDay;
    }

    public function getClickOrOrderDay(){
        return $this->clickOrOrderDay;
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
            
    private $endDay;
    
    public function setEndDay($endDay){
        $this->params['endDay'] = $endDay;
    }

    public function getEndDay(){
        return $this->endDay;
    }
            
    private $groupId;
    
    public function setGroupId($groupId){
        $this->params['groupId'] = $groupId;
    }

    public function getGroupId(){
        return $this->groupId;
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
            
    private $clickOrOrderCaliber;
    
    public function setClickOrOrderCaliber($clickOrOrderCaliber){
        $this->params['clickOrOrderCaliber'] = $clickOrOrderCaliber;
    }

    public function getClickOrOrderCaliber(){
        return $this->clickOrOrderCaliber;
    }
            
    private $giftFlag;
    
    public function setGiftFlag($giftFlag){
        $this->params['giftFlag'] = $giftFlag;
    }

    public function getGiftFlag(){
        return $this->giftFlag;
    }
            
    private $dmpType;
    
    public function setDmpType($dmpType){
        $this->params['dmpType'] = $dmpType;
    }

    public function getDmpType(){
        return $this->dmpType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>