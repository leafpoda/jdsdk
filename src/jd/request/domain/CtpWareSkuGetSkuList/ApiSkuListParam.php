<?php
namespace CtpWareSkuGetSkuList;
class ApiSkuListParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ctp.ware.rpc.jos.sku.ApiSkuListParam";
    }
        
    private $scrollId;
    
    public function setScrollId($scrollId){
        $this->params['scrollId'] = $scrollId;
    }

    public function getScrollId(){
        return $this->scrollId;
    }
            
    private $orderBy;
    
    public function setOrderBy($orderBy){
        $this->params['orderBy'] = $orderBy;
    }

    public function getOrderBy(){
        return $this->orderBy;
    }
            
    private $skuStatus;
    
    public function setSkuStatus($skuStatus){
        $this->params['skuStatus'] = $skuStatus;
    }

    public function getSkuStatus(){
        return $this->skuStatus;
    }
            
    private $categoryId;
    
    public function setCategoryId($categoryId){
        $this->params['categoryId'] = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }
            
    private $startModified;
    
    public function setStartModified($startModified){
        $this->params['startModified'] = $startModified;
    }

    public function getStartModified(){
        return $this->startModified;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $endModified;
    
    public function setEndModified($endModified){
        $this->params['endModified'] = $endModified;
    }

    public function getEndModified(){
        return $this->endModified;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>