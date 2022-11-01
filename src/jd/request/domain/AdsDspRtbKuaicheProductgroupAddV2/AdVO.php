<?php
namespace AdsDspRtbKuaicheProductgroupAddV2;
class AdVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdVO";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $sourceType;
    
    public function setSourceType($sourceType){
        $this->params['sourceType'] = $sourceType;
    }

    public function getSourceType(){
        return $this->sourceType;
    }
            
    private $adName;
    
    public function setAdName($adName){
        $this->params['adName'] = $adName;
    }

    public function getAdName(){
        return $this->adName;
    }
            
    private $imgUrl;
    
    public function setImgUrl($imgUrl){
        $this->params['imgUrl'] = $imgUrl;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }
            
    private $customTitle;
    
    public function setCustomTitle($customTitle){
        $this->params['customTitle'] = $customTitle;
    }

    public function getCustomTitle(){
        return $this->customTitle;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>