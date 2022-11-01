<?php
namespace DspCpdOfflineLockInfoCallBack;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.ResourceQuantityInfo";
    }
        
    private $resourceDetail;
                                        
    public function setResourceDetail($resourceDetail){
        $size = count($resourceDetail);
        for ($i=0; $i<$size; $i++){
            $resourceDetail [$i] = $resourceDetail [$i] ->getInstance();
        }
        $this->params['resourceDetail'] = $resourceDetail;
    }
                                    
            
    private $message;
    
    public function setMessage($message){
        $this->params['message'] = $message;
    }

    public function getMessage(){
        return $this->message;
    }
            
    private $resultType;
    
    public function setResultType($resultType){
        $this->params['resultType'] = $resultType;
    }

    public function getResultType(){
        return $this->resultType;
    }
            
    private $resource;
            
    public function setResource($resource){
        $this->params['resource'] = $resource ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>