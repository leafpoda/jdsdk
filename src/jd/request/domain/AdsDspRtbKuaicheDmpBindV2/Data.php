<?php
namespace AdsDspRtbKuaicheDmpBindV2;
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
            
    private $crowdVOS;
                                        
    public function setCrowdVOS($crowdVOS){
        $size = count($crowdVOS);
        for ($i=0; $i<$size; $i++){
            $crowdVOS [$i] = $crowdVOS [$i] ->getInstance();
        }
        $this->params['crowdVOS'] = $crowdVOS;
    }
                                    
            
    private $groupId;
    
    public function setGroupId($groupId){
        $this->params['groupId'] = $groupId;
    }

    public function getGroupId(){
        return $this->groupId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>