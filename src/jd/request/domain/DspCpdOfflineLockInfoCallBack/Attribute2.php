<?php
namespace DspCpdOfflineLockInfoCallBack;
class Attribute2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.OfflineResource";
    }
        
    private $groupId;
    
    public function setGroupId($groupId){
        $this->params['groupId'] = $groupId;
    }

    public function getGroupId(){
        return $this->groupId;
    }
            
    private $slotId;
    
    public function setSlotId($slotId){
        $this->params['slotId'] = $slotId;
    }

    public function getSlotId(){
        return $this->slotId;
    }
            
    private $additionalParam;
    
    public function setAdditionalParam($additionalParam){
        $this->params['additionalParam'] = $additionalParam;
    }

    public function getAdditionalParam(){
        return $this->additionalParam;
    }
            
    private $deviceId;
    
    public function setDeviceId($deviceId){
        $this->params['deviceId'] = $deviceId;
    }

    public function getDeviceId(){
        return $this->deviceId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>