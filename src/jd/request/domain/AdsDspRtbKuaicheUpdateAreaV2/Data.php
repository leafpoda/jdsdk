<?php
namespace AdsDspRtbKuaicheUpdateAreaV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $newAreaIds;
                        
    public function setNewAreaIds($newAreaIds){
        $this->params['newAreaIds'] = $newAreaIds;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>