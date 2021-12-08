<?php
class AdsDspRtbKuaicheGroupUpdatefeeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kuaiche.group.updatefee";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $mobilePriceCoef;
    	                        
	public function setMobilePriceCoef($mobilePriceCoef){
		$this->mobilePriceCoef = $mobilePriceCoef;
         $this->apiParas["mobilePriceCoef"] = $mobilePriceCoef;
	}

	public function getMobilePriceCoef(){
	  return $this->mobilePriceCoef;
	}

                        	                   			private $inSearchFee;
    	                        
	public function setInSearchFee($inSearchFee){
		$this->inSearchFee = $inSearchFee;
         $this->apiParas["inSearchFee"] = $inSearchFee;
	}

	public function getInSearchFee(){
	  return $this->inSearchFee;
	}

                        	                   			private $recommendFee;
    	                        
	public function setRecommendFee($recommendFee){
		$this->recommendFee = $recommendFee;
         $this->apiParas["recommendFee"] = $recommendFee;
	}

	public function getRecommendFee(){
	  return $this->recommendFee;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

