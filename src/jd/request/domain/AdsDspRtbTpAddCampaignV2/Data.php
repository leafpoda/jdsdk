<?php
namespace AdsDspRtbTpAddCampaignV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.CampaignVO";
    }
        
    private $putType;
    
    public function setPutType($putType){
        $this->params['putType'] = $putType;
    }

    public function getPutType(){
        return $this->putType;
    }
            
    private $dateRange;
    
    public function setDateRange($dateRange){
        $this->params['dateRange'] = $dateRange;
    }

    public function getDateRange(){
        return $this->dateRange;
    }
            
    private $timeRangePriceCoef;
    
    public function setTimeRangePriceCoef($timeRangePriceCoef){
        $this->params['timeRangePriceCoef'] = $timeRangePriceCoef;
    }

    public function getTimeRangePriceCoef(){
        return $this->timeRangePriceCoef;
    }
            
    private $billingType;
    
    public function setBillingType($billingType){
        $this->params['billingType'] = $billingType;
    }

    public function getBillingType(){
        return $this->billingType;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $dayBudget;
    
    public function setDayBudget($dayBudget){
        $this->params['dayBudget'] = $dayBudget;
    }

    public function getDayBudget(){
        return $this->dayBudget;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
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