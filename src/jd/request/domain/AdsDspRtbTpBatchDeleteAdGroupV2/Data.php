<?php
namespace AdsDspRtbTpBatchDeleteAdGroupV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupVO";
    }
        
    private $idList;
                        
    public function setIdList($idList){
        $this->params['idList'] = $idList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>