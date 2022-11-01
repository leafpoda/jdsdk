<?php
namespace WareWriteAdd;
class Image{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Image";
    }
        
    private $colorId;
    
    public function setColorId($colorId){
        $this->params['colorId'] = $colorId;
    }

    public function getColorId(){
        return $this->colorId;
    }
            
    private $imgIndex;
    
    public function setImgIndex($imgIndex){
        $this->params['imgIndex'] = $imgIndex;
    }

    public function getImgIndex(){
        return $this->imgIndex;
    }
            
    private $imgUrl;
    
    public function setImgUrl($imgUrl){
        $this->params['imgUrl'] = $imgUrl;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }
            
    private $imgZoneId;
    
    public function setImgZoneId($imgZoneId){
        $this->params['imgZoneId'] = $imgZoneId;
    }

    public function getImgZoneId(){
        return $this->imgZoneId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>