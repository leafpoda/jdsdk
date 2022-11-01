<?php
namespace DspCpdOfflineXcCullResourceNotice;
class Attribute3{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.ResourceInfo";
    }
        
    private $deviceCode;
    
    public function setDeviceCode($deviceCode){
        $this->params['deviceCode'] = $deviceCode;
    }

    public function getDeviceCode(){
        return $this->deviceCode;
    }
            
    private $detailedReason;
    
    public function setDetailedReason($detailedReason){
        $this->params['detailedReason'] = $detailedReason;
    }

    public function getDetailedReason(){
        return $this->detailedReason;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>