<?php
namespace WareWriteUpdateWareSaleAttrvalueAlias;
class SkuProp{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Prop";
    }
        
    private $attrId;
    
    public function setAttrId($attrId){
        $this->params['attrId'] = $attrId;
    }

    public function getAttrId(){
        return $this->attrId;
    }
            
    private $attrValues;
    
    public function setAttrValues($attrValues){
        $this->params['attrValues'] = $attrValues;
    }

    public function getAttrValues(){
        return $this->attrValues;
    }
            
    private $attrValueAlias;
    
    public function setAttrValueAlias($attrValueAlias){
        $this->params['attrValueAlias'] = $attrValueAlias;
    }

    public function getAttrValueAlias(){
        return $this->attrValueAlias;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>