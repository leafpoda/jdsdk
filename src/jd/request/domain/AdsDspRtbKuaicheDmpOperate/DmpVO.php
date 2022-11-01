<?php
namespace AdsDspRtbKuaicheDmpOperate;
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
            
    private $josOperate;
    
    public function setJosOperate($josOperate){
        $this->params['josOperate'] = $josOperate;
    }

    public function getJosOperate(){
        return $this->josOperate;
    }
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $crowdVOS;
                                        
    public function setCrowdVOS($crowdVOS){
        $size = count($crowdVOS);
        for ($i=0; $i<$size; $i++){
            $crowdVOS [$i] = $crowdVOS [$i] ->getInstance();
        }
        $this->params['crowdVOS'] = $crowdVOS;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>