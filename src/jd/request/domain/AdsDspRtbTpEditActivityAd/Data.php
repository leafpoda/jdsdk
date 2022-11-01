<?php
namespace AdsDspRtbTpEditActivityAd;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.ActivityAdVO";
    }
        
    private $activityName;
    
    public function setActivityName($activityName){
        $this->params['activityName'] = $activityName;
    }

    public function getActivityName(){
        return $this->activityName;
    }
            
    private $enable;
    
    public function setEnable($enable){
        $this->params['enable'] = $enable;
    }

    public function getEnable(){
        return $this->enable;
    }
            
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $adList;
                                        
    public function setAdList($adList){
        $size = count($adList);
        for ($i=0; $i<$size; $i++){
            $adList [$i] = $adList [$i] ->getInstance();
        }
        $this->params['adList'] = $adList;
    }
                                    
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>