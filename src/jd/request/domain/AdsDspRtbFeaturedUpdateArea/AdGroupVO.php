<?php
namespace AdsDspRtbFeaturedUpdateArea;
class AdGroupVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $newAreaIds;
                        
    public function setNewAreaIds($newAreaIds){
        $this->params['newAreaIds'] = $newAreaIds;
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