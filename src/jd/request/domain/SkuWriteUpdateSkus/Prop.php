<?php
namespace SkuWriteUpdateSkus;
class Prop{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Prop";
    }
        
    private $attrValueAlias;
    
    public function setAttrValueAlias($attrValueAlias){
        $this->params['attrValueAlias'] = $attrValueAlias;
    }

    public function getAttrValueAlias(){
        return $this->attrValueAlias;
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
            
    private $expands;
    
    public function setExpands($expands){
        $this->params['expands'] = $expands;
    }

    public function getExpands(){
        return $this->expands;
    }
            
    private $units;
    
    public function setUnits($units){
        $this->params['units'] = $units;
    }

    public function getUnits(){
        return $this->units;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>