<?php
namespace AdsDspRtbKuaicheGroupUpdatefeeV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdGroupFeeVO";
    }
        
    private $mobilePriceCoef;
    
    public function setMobilePriceCoef($mobilePriceCoef){
        $this->params['mobilePriceCoef'] = $mobilePriceCoef;
    }

    public function getMobilePriceCoef(){
        return $this->mobilePriceCoef;
    }
            
    private $inSearchFee;
    
    public function setInSearchFee($inSearchFee){
        $this->params['inSearchFee'] = $inSearchFee;
    }

    public function getInSearchFee(){
        return $this->inSearchFee;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $recommendFee;
    
    public function setRecommendFee($recommendFee){
        $this->params['recommendFee'] = $recommendFee;
    }

    public function getRecommendFee(){
        return $this->recommendFee;
    }
            
    private $autoBiddingModuleVO;
            
    public function setAutoBiddingModuleVO($autoBiddingModuleVO){
        $this->params['autoBiddingModuleVO'] = $autoBiddingModuleVO ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>