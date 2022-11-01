<?php
namespace DspCpdOfflineXcProduceBrief;
class Param1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.cpd.soa.outer.api.dto.offline.BrandOfflineXCBriefDTO";
    }
        
    private $clientName;
    
    public function setClientName($clientName){
        $this->params['clientName'] = $clientName;
    }

    public function getClientName(){
        return $this->clientName;
    }
            
    private $endDate;
    
    public function setEndDate($endDate){
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
            
    private $shopName;
    
    public function setShopName($shopName){
        $this->params['shopName'] = $shopName;
    }

    public function getShopName(){
        return $this->shopName;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $skuIds;
                        
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }
                    
            
    private $frequency;
                        
    public function setFrequency($frequency){
        $this->params['frequency'] = $frequency;
    }
                    
            
    private $extInfo;
                        
    public function setExtInfo($extInfo){
        $this->params['extInfo'] = $extInfo;
    }
                    
            
    private $duration;
                        
    public function setDuration($duration){
        $this->params['duration'] = $duration;
    }
                    
            
    private $dataBackflow;
    
    public function setDataBackflow($dataBackflow){
        $this->params['dataBackflow'] = $dataBackflow;
    }

    public function getDataBackflow(){
        return $this->dataBackflow;
    }
            
    private $brand;
    
    public function setBrand($brand){
        $this->params['brand'] = $brand;
    }

    public function getBrand(){
        return $this->brand;
    }
            
    private $budget;
    
    public function setBudget($budget){
        $this->params['budget'] = $budget;
    }

    public function getBudget(){
        return $this->budget;
    }
            
    private $taStrategy;
    
    public function setTaStrategy($taStrategy){
        $this->params['taStrategy'] = $taStrategy;
    }

    public function getTaStrategy(){
        return $this->taStrategy;
    }
            
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $cities;
                        
    public function setCities($cities){
        $this->params['cities'] = $cities;
    }
                    
            
    private $competingBrand;
    
    public function setCompetingBrand($competingBrand){
        $this->params['competingBrand'] = $competingBrand;
    }

    public function getCompetingBrand(){
        return $this->competingBrand;
    }
            
    private $deliveryType;
                        
    public function setDeliveryType($deliveryType){
        $this->params['deliveryType'] = $deliveryType;
    }
                    
            
    private $screenLocation;
                        
    public function setScreenLocation($screenLocation){
        $this->params['screenLocation'] = $screenLocation;
    }
                    
            
    private $beginDate;
    
    public function setBeginDate($beginDate){
        $this->params['beginDate'] = $beginDate;
    }

    public function getBeginDate(){
        return $this->beginDate;
    }
            
    private $versionId;
    
    public function setVersionId($versionId){
        $this->params['versionId'] = $versionId;
    }

    public function getVersionId(){
        return $this->versionId;
    }
            
    private $deliveryPurpose;
    
    public function setDeliveryPurpose($deliveryPurpose){
        $this->params['deliveryPurpose'] = $deliveryPurpose;
    }

    public function getDeliveryPurpose(){
        return $this->deliveryPurpose;
    }
            
    private $industryTaboo;
    
    public function setIndustryTaboo($industryTaboo){
        $this->params['industryTaboo'] = $industryTaboo;
    }

    public function getIndustryTaboo(){
        return $this->industryTaboo;
    }
            
    private $screenTypes;
                                        
    public function setScreenTypes($screenTypes){
        $size = count($screenTypes);
        for ($i=0; $i<$size; $i++){
            $screenTypes [$i] = $screenTypes [$i] ->getInstance();
        }
        $this->params['screenTypes'] = $screenTypes;
    }
                                    
            
    private $projectName;
    
    public function setProjectName($projectName){
        $this->params['projectName'] = $projectName;
    }

    public function getProjectName(){
        return $this->projectName;
    }
            
    private $category;
    
    public function setCategory($category){
        $this->params['category'] = $category;
    }

    public function getCategory(){
        return $this->category;
    }
            
    private $projectId;
    
    public function setProjectId($projectId){
        $this->params['projectId'] = $projectId;
    }

    public function getProjectId(){
        return $this->projectId;
    }
            
    private $competingSku;
    
    public function setCompetingSku($competingSku){
        $this->params['competingSku'] = $competingSku;
    }

    public function getCompetingSku(){
        return $this->competingSku;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>