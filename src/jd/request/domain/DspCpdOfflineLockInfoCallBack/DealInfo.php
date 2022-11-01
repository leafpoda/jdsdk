<?php
namespace DspCpdOfflineLockInfoCallBack;
class DealInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.OfflineDealDTO";
    }
        
    private $reserveDetails;
                                        
    public function setReserveDetails($reserveDetails){
        $size = count($reserveDetails);
        for ($i=0; $i<$size; $i++){
            $reserveDetails [$i] = $reserveDetails [$i] ->getInstance();
        }
        $this->params['reserveDetails'] = $reserveDetails;
    }
                                    
            
    private $acceptConflict;
    
    public function setAcceptConflict($acceptConflict){
        $this->params['acceptConflict'] = $acceptConflict;
    }

    public function getAcceptConflict(){
        return $this->acceptConflict;
    }
            
    private $dealId;
    
    public function setDealId($dealId){
        $this->params['dealId'] = $dealId;
    }

    public function getDealId(){
        return $this->dealId;
    }
            
    private $lockResultFileUrl;
    
    public function setLockResultFileUrl($lockResultFileUrl){
        $this->params['lockResultFileUrl'] = $lockResultFileUrl;
    }

    public function getLockResultFileUrl(){
        return $this->lockResultFileUrl;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>