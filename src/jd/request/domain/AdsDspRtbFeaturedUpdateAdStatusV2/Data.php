<?php
namespace AdsDspRtbFeaturedUpdateAdStatusV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.StatusUpdateVO";
    }
        
    private $operateType;
    
    public function setOperateType($operateType){
        $this->params['operateType'] = $operateType;
    }

    public function getOperateType(){
        return $this->operateType;
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