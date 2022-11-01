<?php
namespace AdsDspRtbKuaicheCampaignUpdatespeed;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.CampaignVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $uniformSpeed;
    
    public function setUniformSpeed($uniformSpeed){
        $this->params['uniformSpeed'] = $uniformSpeed;
    }

    public function getUniformSpeed(){
        return $this->uniformSpeed;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>