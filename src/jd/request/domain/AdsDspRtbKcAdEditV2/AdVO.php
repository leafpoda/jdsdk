<?php
namespace AdsDspRtbKcAdEditV2;
class AdVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdVO";
    }
        
    private $customTitle;
    
    public function setCustomTitle($customTitle){
        $this->params['customTitle'] = $customTitle;
    }

    public function getCustomTitle(){
        return $this->customTitle;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
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
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $imgUrl;
    
    public function setImgUrl($imgUrl){
        $this->params['imgUrl'] = $imgUrl;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>