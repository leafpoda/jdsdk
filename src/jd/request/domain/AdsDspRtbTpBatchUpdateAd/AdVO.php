<?php
namespace AdsDspRtbTpBatchUpdateAd;
class AdVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $groupId;
    
    public function setGroupId($groupId){
        $this->params['groupId'] = $groupId;
    }

    public function getGroupId(){
        return $this->groupId;
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
            
    private $restoreDefault;
    
    public function setRestoreDefault($restoreDefault){
        $this->params['restoreDefault'] = $restoreDefault;
    }

    public function getRestoreDefault(){
        return $this->restoreDefault;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>