<?php
namespace SkuWriteSaveWareSkus;
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
            
    private $values;
    
    public function setValues($values){
        $this->params['values'] = $values;
    }

    public function getValues(){
        return $this->values;
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