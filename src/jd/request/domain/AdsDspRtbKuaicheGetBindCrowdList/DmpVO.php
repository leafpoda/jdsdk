<?php
namespace AdsDspRtbKuaicheGetBindCrowdList;
class DmpVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.dmp.DmpVO";
    }
        
    private $dmpType;
    
    public function setDmpType($dmpType){
        $this->params['dmpType'] = $dmpType;
    }

    public function getDmpType(){
        return $this->dmpType;
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