<?php
namespace AdsDspRtbTpUpdateArea;
class AdGroupVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $newAreaId;
                        
    public function setNewAreaId($newAreaId){
        $this->params['newAreaId'] = $newAreaId;
    }
                    
            
    private $id;
                        
    public function setId($id){
        $this->params['id'] = $id;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>