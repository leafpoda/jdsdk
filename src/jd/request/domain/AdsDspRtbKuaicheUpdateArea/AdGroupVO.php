<?php
namespace AdsDspRtbKuaicheUpdateArea;
class AdGroupVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $newAreaIds;
                        
    public function setNewAreaIds($newAreaIds){
        $this->params['newAreaIds'] = $newAreaIds;
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