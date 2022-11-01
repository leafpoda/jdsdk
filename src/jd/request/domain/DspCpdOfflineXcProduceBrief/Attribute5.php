<?php
namespace DspCpdOfflineXcProduceBrief;
class Attribute5{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.ScreenInfo";
    }
        
    private $screenType;
    
    public function setScreenType($screenType){
        $this->params['screenType'] = $screenType;
    }

    public function getScreenType(){
        return $this->screenType;
    }
            
    private $location;
    
    public function setLocation($location){
        $this->params['location'] = $location;
    }

    public function getLocation(){
        return $this->location;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>