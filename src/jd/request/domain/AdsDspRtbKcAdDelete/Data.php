<?php
namespace AdsDspRtbKcAdDelete;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.StatusUpdateVO";
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