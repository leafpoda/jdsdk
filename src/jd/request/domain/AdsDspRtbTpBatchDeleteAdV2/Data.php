<?php
namespace AdsDspRtbTpBatchDeleteAdV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdVO";
    }
        
    private $adIds;
                        
    public function setAdIds($adIds){
        $this->params['adIds'] = $adIds;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>