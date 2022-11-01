<?php
namespace DspCpdOfflineXcCullResourceNotice;
class Param1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.OfflineDealDTO";
    }
        
    private $resourceDetails;
                                        
    public function setResourceDetails($resourceDetails){
        $size = count($resourceDetails);
        for ($i=0; $i<$size; $i++){
            $resourceDetails [$i] = $resourceDetails [$i] ->getInstance();
        }
        $this->params['resourceDetails'] = $resourceDetails;
    }
                                    
            
    private $dealId;
    
    public function setDealId($dealId){
        $this->params['dealId'] = $dealId;
    }

    public function getDealId(){
        return $this->dealId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>