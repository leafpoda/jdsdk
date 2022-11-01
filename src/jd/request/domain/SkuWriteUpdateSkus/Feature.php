<?php
namespace SkuWriteUpdateSkus;
class Feature{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Feature";
    }
        
    private $cn;
    
    public function setCn($cn){
        $this->params['cn'] = $cn;
    }

    public function getCn(){
        return $this->cn;
    }
            
    private $value;
    
    public function setValue($value){
        $this->params['value'] = $value;
    }

    public function getValue(){
        return $this->value;
    }
            
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>