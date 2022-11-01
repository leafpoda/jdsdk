<?php
namespace AdsDspRtbKuaicheJxgroupAdd;
class AdVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdVO";
    }
        
    private $materialId;
    
    public function setMaterialId($materialId){
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId(){
        return $this->materialId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>