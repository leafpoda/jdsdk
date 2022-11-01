<?php
namespace AdsDspRtbKuaicheJxcampaignAdd;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.CampaignVO";
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
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $uniformSpeed;
    
    public function setUniformSpeed($uniformSpeed){
        $this->params['uniformSpeed'] = $uniformSpeed;
    }

    public function getUniformSpeed(){
        return $this->uniformSpeed;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>