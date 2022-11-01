<?php
namespace AdsDspRtbTpUpdateBudgetV2;
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
            
    private $dayBudget;
    
    public function setDayBudget($dayBudget){
        $this->params['dayBudget'] = $dayBudget;
    }

    public function getDayBudget(){
        return $this->dayBudget;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>