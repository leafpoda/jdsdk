<?php
namespace AdsDspRtbTpBatchUpdateDmpStatusV2;
class Data{

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
            
    private $operateType;
    
    public function setOperateType($operateType){
        $this->params['operateType'] = $operateType;
    }

    public function getOperateType(){
        return $this->operateType;
    }
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $displayType;
    
    public function setDisplayType($displayType){
        $this->params['displayType'] = $displayType;
    }

    public function getDisplayType(){
        return $this->displayType;
    }
            
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>