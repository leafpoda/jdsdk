<?php
namespace AdsDspRtbShopQuery;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.ShopVO";
    }
        
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $value;
    
    public function setValue($value){
        $this->params['value'] = $value;
    }

    public function getValue(){
        return $this->value;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>